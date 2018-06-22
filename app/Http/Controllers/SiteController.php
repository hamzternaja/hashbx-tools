<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DomDocument;
use DOMXPath;

class SiteController extends Controller
{
    private function returnXPathObject($item)
    {
        $xmlPageDom = new DomDocument(); // Instantiating a new DomDocument object
        @$xmlPageDom->loadHTML($item); // Loading the HTML from downloaded page
        $xmlPageXPath = new DOMXPath($xmlPageDom); // Instantiating new XPath DOM object
        return $xmlPageXPath; // Returning XPath object
    }

    private function curlGet($url) {
        $ch = curl_init($url);

        // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_URL,$url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

        $results = curl_exec($ch);	// Executing cURL session
        curl_close($ch);	// Closing cURL session
        return $results;	// Return the results
    }

    public function index(Request $request)
    {
        // ------------------------ BX Data ------------------------------------------------

        $output = $this->curlGet('https://bx.in.th/api/');

        $output_arr = json_decode($output, true);

        $btc_last_price = $output_arr[1]["last_price"];     // BTC
        $bch_last_price = $output_arr[27]["last_price"];    // BCH

        // ------------------------------ Token/BTC ------------------------------
        $output = $this->curlGet('https://hashbx.io/exchange/Token/BTC');
        $packtPageXpath = $this->returnXPathObject($output);	// Instantiating new XPath DOM object
        $elements = $packtPageXpath->query('//*[@id="order_buy"]/tr[1]/td[3]');	// Querying for <h1> (title of book)
        $token_per_btc_buy_rate = 0.0;
        $buy_token_by_btc = 0.0;
        if (!is_null($elements)) {
            $token_per_btc_buy_rate = floatval(str_replace(",","",$elements[0]->nodeValue));
            $buy_token_by_btc = $btc_last_price / $token_per_btc_buy_rate;
            // echo "<strong>Buy Rate: </strong>".number_format($token_per_btc_buy_rate,2,".",",")." Token/BTC";
            // echo "<br/>";
            // echo "<strong>ซื้อ Token ด้วย BTC: </strong>".number_format($buy_token_by_btc,2,".",",")." บาท";
            // echo "<br/>";
            // echo "<br/>";
        }

        $elements = $packtPageXpath->query('//*[@id="order_sell"]/tr[1]/td[1]');	// Querying for <h1> (title of book)

        $token_per_btc_sell_rate = 0.0;
        $sell_token_by_btc = 0.0;
        if (!is_null($elements)) {
            $token_per_btc_sell_rate = floatval(str_replace(",","",$elements[0]->nodeValue));
            $sell_token_by_btc = $btc_last_price / $token_per_btc_sell_rate;
            // echo "<strong>Sale Rate: </strong>".number_format($token_btc_sell,2,".",",")." Token/BTC";
            // echo "<br/>";
            // echo "<strong>ขาย Token เพื่อออกระบบทาง BTC: </strong>".number_format($btc_last_price / $token_btc_sell,2,".",",")." บาท";
            // echo "<br/>";
            // echo "<br/>";
        }

        // ------------------------------ Token/BCH ------------------------------
        $output = $this->curlGet('https://hashbx.io/exchange/Token/BCH');
        $packtPageXpath = $this->returnXPathObject($output);	// Instantiating new XPath DOM object

        $elements = $packtPageXpath->query('//*[@id="order_buy"]/tr[1]/td[3]');	// Querying for <h1> (title of book)

        $token_per_bch_buy_rate = 0.0;
        $buy_token_by_bch = 0.0;
        if (!is_null($elements)) {
            $token_per_bch_buy_rate = floatval(str_replace(",","",$elements[0]->nodeValue));
            $buy_token_by_bch = $bch_last_price / $token_per_bch_buy_rate;
            // echo "<strong>Buy Rate: </strong>".$token_bch_buy." Token/BCH";
            // echo "<br/>";
            // echo "<strong>ซื้อ Token ด้วย BCH: </strong>".number_format($bch_last_price / $token_bch_buy,2,".",",")." บาท";
            // echo "<br/>";
            // echo "<br/>";
        }

        $elements = $packtPageXpath->query('//*[@id="order_sell"]/tr[1]/td[1]');	// Querying for <h1> (title of book)

        $token_per_bch_sell_rate = 0.0;
        $sell_token_by_bch = 0.0;
        if (!is_null($elements)) {
            $token_per_bch_sell_rate = floatval(str_replace(",","",$elements[0]->nodeValue));
            $sell_token_by_bch = $bch_last_price / $token_per_bch_sell_rate;
            // echo "<strong>Sale Rate: </strong>".$token_bch_sell." Token/BCH";
            // echo "<br/>";
            // echo "<strong>ขาย Token ด้วย BCH: </strong>".number_format($bch_last_price / $token_bch_sell,2,".",",")." บาท";
            // echo "<br/>";
            // echo "<br/>";
        }

        return view('welcome', [
            'time_text' => thaidate("วันlที่ j F H:i น.", time()),
            'btc_last_price' => $btc_last_price,
            'bch_last_price' => $bch_last_price,

            'token_per_btc_buy_rate' => $token_per_btc_buy_rate,
            'buy_token_by_btc' => $buy_token_by_btc,
            'token_per_btc_sell_rate' => $token_per_btc_sell_rate,
            'sell_token_by_btc' => $sell_token_by_btc,

            'token_per_bch_buy_rate' => $token_per_bch_buy_rate,
            'buy_token_by_bch' => $buy_token_by_bch,
            'token_per_bch_sell_rate' => $token_per_bch_sell_rate,
            'sell_token_by_bch' => $sell_token_by_bch,
        ]);
    }
}
