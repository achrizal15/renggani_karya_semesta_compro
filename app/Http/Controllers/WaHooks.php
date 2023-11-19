<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WaHooks extends Controller
{
    public function index()
    {
        header('Content-Type: application/json; charset=utf-8');

        $json = file_get_contents('php://input');
        $data = json_decode($json, true);
        // $device = "6289512589756";
        $sender = isset($data['sender']) ? $data['sender'] : '';
        $message = isset($data['message']) ? $data['message'] : 'test';
        // $text = $data['text']; //button text
        // $member = $data['member']; //group member who send the message
        // $name = $data['name'];
        // $location = $data['location'];
        // $pollname = $data['pollname'];
        // $choices = $data['choices'];

        //data below will only received by device with all feature package
//start
        // $url = $data['url'];
        // $filename = $data['filename'];
        // $extension = $data['extension'];
        //end

        function sendFonnte($target, $data)
        {
            $curl = curl_init();

            curl_setopt_array(
                $curl,
                array(
                    CURLOPT_URL => "https://api.fonnte.com/send",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => array(
                        'target' => $target,
                        'message' => $data['message'],
                        'url' => $data['url'],
                        'filename' => $data['filename'],
                    ),
                    CURLOPT_HTTPHEADER => array(
                        "Authorization: 5y8B+tAP2-!!T-QGgjy_"
                    ),
                )
            );

            $response = curl_exec($curl);

            curl_close($curl);

            return $response;
        }

        if ($message == "test") {
            $reply = [
                "message" => "working great!",
            ];
        } elseif ($message == "image") {
            $reply = [
                "message" => "image message",
                "url" => "https://filesamples.com/samples/image/jpg/sample_640%C3%97426.jpg",
            ];
        } elseif ($message == "audio") {
            $reply = [
                "message" => "audio message",
                "url" => "https://filesamples.com/samples/audio/mp3/sample3.mp3",
                "filename" => "music",
            ];
        } elseif ($message == "video") {
            $reply = [
                "message" => "video message",
                "url" => "https://filesamples.com/samples/video/mp4/sample_640x360.mp4",
            ];
        } elseif ($message == "file") {
            $reply = [
                "message" => "file message",
                "url" => "https://filesamples.com/samples/document/docx/sample3.docx",
                "filename" => "document",
            ];
        } else {
            $reply = [
                "message" => "Sorry, i don't understand. Please use one of the following keyword :
		    
Test
Audio
Video
Image
File",
            ];
        }

        sendFonnte($sender, $reply);
    }
}
