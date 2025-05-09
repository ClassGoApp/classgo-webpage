<?php

namespace Modules\MeetFusion\Drivers;

use Modules\MeetFusion\Contracts\MeetFusionDriverInterface;
use GuzzleHttp\Client;

class Zoom implements MeetFusionDriverInterface {

    protected string $accessToken;
    protected $client;
    protected $clientCredentials;

    public function setKeys($credentials) {
        $this->clientCredentials = $credentials;
    }

    protected function setupClient()
    {
        $this->accessToken = $this->getAccessToken();

        $this->client = new Client([
            'base_uri' => 'https://api.zoom.us/v2/',
            'headers' => [
                'Authorization' => 'Bearer ' . $this->accessToken,
                'Content-Type' => 'application/json',
            ],
        ]);
    }

    protected function getAccessToken()
    {

        $client = new Client([
            'headers' => [
                'Authorization' => 'Basic ' . base64_encode($this->clientCredentials['client_id'] . ':' . $this->clientCredentials['client_secret']),
                'Host' => 'zoom.us',
            ],
        ]);

        $response = $client->request('POST', "https://zoom.us/oauth/token", [
            'form_params' => [
                'grant_type' => 'account_credentials',
                'account_id' => $this->clientCredentials['account_id'],
            ],
        ]);

        $responseBody = json_decode($response->getBody(), true);
        return $responseBody['access_token'];
    }

    /**
     * @params $params
     *       [
     *        'host_email',
     *        'topic',
     *        'agenda',       
     *        'duration',       
     *        'timezone',       
     *        'start_time',       
     *        'schedule_for'
     *     ]       
     */

    // create meeting
    public function createMeeting(array $data)
    {
        try {
            $this->setupClient();
            $response = $this->client->request('POST', 'users/me/meetings', [
                'json' => $this->getMeetingData($data),
            ]);
            $res = json_decode($response->getBody(), true);
            return [
                'status' => true,
                'data' => [
                    'link' => $res['join_url']
                ],
            ];
        } catch (\Exception $ex) {
            return [
                'status' => false,
                'message' => $ex->getMessage(),
            ];
        }
    }

    protected function getMeetingData($params) {
        return array_merge($params, [
            "type"          => 2, // 1 => instant, 2 => scheduled, 3 => recurring with no fixed time, 8 => recurring with fixed time
            "password"      => generatePassword(),
            "settings"      => [
                'join_before_host'  => true, // if you want to join before host set true otherwise set false
                "jbh_time"          => 5, // join before host time in minutes
                // 'host_video'        => false, // if you want to start video when host join set true otherwise set false
                // 'participant_video' => true, // if you want to start video when participants join set true otherwise set false
                // 'mute_upon_entry'   => false, // if you want to mute participants when they join the meeting set true otherwise set false
                // 'waiting_room'      => false, // if you want to use waiting room for participants set true otherwise set false
                // 'audio'             => 'both', // values are 'both', 'telephony', 'voip'. default is both.
                // 'auto_recording'    => 'none', // values are 'none', 'local', 'cloud'. default is none.
                // 'approval_type'     => 1, // 0 => Automatically Approve, 1 => Manually Approve, 2 => No Registration Required
            ]
        ]);
    }
}