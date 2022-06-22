<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class AgregatController extends Controller{
    public function index(){
        $bolanet = file_get_contents("https://www.bola.net/feed/");
        $xml = simplexml_load_string($bolanet,'SimpleXMLElement', LIBXML_NOCDATA);
        // print_r($xml);
        foreach($xml->channel->item as $item){
            echo 'Title: '.$item->title.'<br>';
            $description=$item->description;
            echo 'Description: '.$description.'<br>';
            echo 'Image Link: '.$item->enclosure['url'].'<br><br>';
            $values = array('title' => $item->title, 'description'=>preg_replace("/<img[^>]+\>/i", "", $description),'img'=>$item->enclosure['url']);
            DB::table('bolanet')->insert($values);
        }
        $cnbc = file_get_contents("https://www.cnbcindonesia.com/market/rss/");
        $xml2 = simplexml_load_string($cnbc,'SimpleXMLElement', LIBXML_NOCDATA);
        // print_r($xml);
        foreach($xml2->channel->item as $item){
            echo 'Title: '.$item->title.'<br>';
            $description=$item->description;
            echo 'Description: '.$description.'<br>';
            echo 'Image Link: '.$item->enclosure['url'].'<br><br>';
            $values = array('title' => $item->title, 'description'=>preg_replace("/<img[^>]+\>/i", "", $description),'img'=>$item->enclosure['url']);
            DB::table('cnbc')->insert($values);
        }
        $kumparan = file_get_contents("https://lapi.kumparan.com/v2.0/rss/");
        $xml3 = simplexml_load_string($kumparan,'SimpleXMLElement', LIBXML_NOCDATA);
        // print_r($xml);
        foreach($xml3->channel->item as $item){
            echo 'Title: '.$item->title.'<br>';
            echo 'Description: '.$item->description.'<br>';
            echo 'Image Link: '.$item->enclosure['url'].'<br><br>';
            $values = array('title' => $item->title, 'description'=>$item->description,'img'=>$item->enclosure['url']);
            DB::table('kumparan')->insert($values);
        }
    }
}