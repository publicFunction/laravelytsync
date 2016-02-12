<?php

namespace PublicFunction\YouTube\Lib;


class YouTubeClient {

    private $access_token;
    private $url;
    private $api;
    private $args = array();

    public function __construct($api) {
        $this->api = $api;
        $this->access_token = $api['key']['server'];
        $this->url = $api['url'];
        $this->args = $api['args'];
    }

    public function get($endpoint, $args=array()) {
        $args = array_merge($this->args, $args);
        $args['key'] = $this->access_token;
        $query_string = "?".http_build_query($args);
        $url = $this->url.$endpoint.$query_string;
        $response = $this->makeRequest($url);
        $data = json_decode($response);
        return $data;
    }

    private function makeRequest($url, $params=array()) {
        $response = file_get_contents($url);
        return $response;
    }

}