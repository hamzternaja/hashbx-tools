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
        $doge_last_price = $output_arr[4]["last_price"] * $btc_last_price;    // DOGE
        $xcn_last_price = $output_arr[15]["last_price"] * $btc_last_price ;    // XCN

        // ------------------------------ Token/BTC ------------------------------
        $output = $this->curlGet('https://hashbx.io/exchange/Token/BTC');
        $packtPageXpath = $this->returnXPathObject($output);	// Instantiating new XPath DOM object
        $elements = $packtPageXpath->query('//*[@id="order_buy"]/tr[1]/td[3]');	// Querying for <h1> (title of book)
        $token_per_btc_buy_rate = 0.0;
        $buy_token_by_btc = 0.0;
        if (!is_null($elements)) {
            $token_per_btc_buy_rate = floatval(str_replace(",","",$elements[0]->nodeValue));
            $buy_token_by_btc = $btc_last_price / $token_per_btc_buy_rate;
        }

        $elements = $packtPageXpath->query('//*[@id="order_sell"]/tr[1]/td[1]');	// Querying for <h1> (title of book)

        $token_per_btc_sell_rate = 0.0;
        $sell_token_by_btc = 0.0;
        if (!is_null($elements)) {
            $token_per_btc_sell_rate = floatval(str_replace(",","",$elements[0]->nodeValue));
            $sell_token_by_btc = $btc_last_price / $token_per_btc_sell_rate;
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
        }

        $elements = $packtPageXpath->query('//*[@id="order_sell"]/tr[1]/td[1]');	// Querying for <h1> (title of book)

        $token_per_bch_sell_rate = 0.0;
        $sell_token_by_bch = 0.0;
        if (!is_null($elements)) {
            $token_per_bch_sell_rate = floatval(str_replace(",","",$elements[0]->nodeValue));
            $sell_token_by_bch = $bch_last_price / $token_per_bch_sell_rate;
        }

        // ------------------------------ Token/HBX ------------------------------
        $output = $this->curlGet('https://hashbx.io/exchange/Token/HBX');
        $packtPageXpath = $this->returnXPathObject($output);	// Instantiating new XPath DOM object

        $elements = $packtPageXpath->query('//*[@id="order_buy"]/tr[1]/td[3]');	// Querying for <h1> (title of book)

        $token_per_hbx_buy_rate = 0.0;
        if (!is_null($elements)) {
            $token_per_hbx_buy_rate = floatval(str_replace(",","",$elements[0]->nodeValue));
        }

        $elements = $packtPageXpath->query('//*[@id="order_sell"]/tr[1]/td[1]');	// Querying for <h1> (title of book)

        $token_per_hbx_sell_rate = 0.0;
        if (!is_null($elements)) {
            $token_per_hbx_sell_rate = floatval(str_replace(",","",$elements[0]->nodeValue));
        }

        return view('welcome', [
            'time_text' => thaidate("วันlที่ j F H:i น.", time()),
            'btc_last_price' => $btc_last_price,
            'bch_last_price' => $bch_last_price,
            'doge_last_price' => $doge_last_price,
            'xcn_last_price' => $xcn_last_price,

            'token_per_btc_buy_rate' => $token_per_btc_buy_rate,
            'buy_token_by_btc' => $buy_token_by_btc,
            'token_per_btc_sell_rate' => $token_per_btc_sell_rate,
            'sell_token_by_btc' => $sell_token_by_btc,

            'token_per_bch_buy_rate' => $token_per_bch_buy_rate,
            'buy_token_by_bch' => $buy_token_by_bch,
            'token_per_bch_sell_rate' => $token_per_bch_sell_rate,
            'sell_token_by_bch' => $sell_token_by_bch,

            'token_per_hbx_buy_rate' => $token_per_hbx_buy_rate,
            'token_per_hbx_sell_rate' => $token_per_hbx_sell_rate,
            // 'buy_token_by_hbx' => $buy_token_by_hbx,
            // 'sell_token_by_hbx' => $sell_token_by_hbx,
        ]);
    }

    public function token(Request $request)
    {
        // ------------------------ BX Data ------------------------------------------------

        $output = $this->curlGet('https://bx.in.th/api/');

        $output_arr = json_decode($output, true);

        $btc_last_price = $output_arr[1]["last_price"];     // BTC
        $bch_last_price = $output_arr[27]["last_price"];    // BCH
        $doge_last_price = $output_arr[4]["last_price"] * $btc_last_price;    // DOGE
        $xcn_last_price = $output_arr[15]["last_price"] * $btc_last_price ;    // XCN

        // ------------------------------ Token/BTC ------------------------------
        $output = $this->curlGet('https://hashbx.io/exchange/Token/BTC');
        $packtPageXpath = $this->returnXPathObject($output);	// Instantiating new XPath DOM object
        $elements = $packtPageXpath->query('//*[@id="order_buy"]/tr[1]/td[3]');	// Querying for <h1> (title of book)
        $token_per_btc_buy_rate = 0.0;
        $buy_token_by_btc = 0.0;
        if (!is_null($elements)) {
            $token_per_btc_buy_rate = floatval(str_replace(",","",$elements[0]->nodeValue));
            $buy_token_by_btc = $btc_last_price / $token_per_btc_buy_rate;
        }

        $elements = $packtPageXpath->query('//*[@id="order_sell"]/tr[1]/td[1]');	// Querying for <h1> (title of book)

        $token_per_btc_sell_rate = 0.0;
        $sell_token_by_btc = 0.0;
        if (!is_null($elements)) {
            $token_per_btc_sell_rate = floatval(str_replace(",","",$elements[0]->nodeValue));
            $sell_token_by_btc = $btc_last_price / $token_per_btc_sell_rate;
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
        }

        $elements = $packtPageXpath->query('//*[@id="order_sell"]/tr[1]/td[1]');	// Querying for <h1> (title of book)

        $token_per_bch_sell_rate = 0.0;
        $sell_token_by_bch = 0.0;
        if (!is_null($elements)) {
            $token_per_bch_sell_rate = floatval(str_replace(",","",$elements[0]->nodeValue));
            $sell_token_by_bch = $bch_last_price / $token_per_bch_sell_rate;
        }

        // ------------------------------ Token/DOGE ------------------------------
        $output = $this->curlGet('https://hashbx.io/exchange/Token/DOGE');
        $packtPageXpath = $this->returnXPathObject($output);	// Instantiating new XPath DOM object

        $elements = $packtPageXpath->query('//*[@id="order_buy"]/tr[1]/td[3]');	// Querying for <h1> (title of book)

        $token_per_doge_buy_rate = 0.0;
        $buy_token_by_doge = 0.0;
        if (!is_null($elements)) {
            $token_per_doge_buy_rate = floatval(str_replace(",","",$elements[0]->nodeValue));
            $buy_token_by_doge = $doge_last_price / $token_per_doge_buy_rate;
        }

        $elements = $packtPageXpath->query('//*[@id="order_sell"]/tr[1]/td[1]');	// Querying for <h1> (title of book)

        $token_per_doge_sell_rate = 0.0;
        $sell_token_by_doge = 0.0;
        if (!is_null($elements)) {
            $token_per_doge_sell_rate = floatval(str_replace(",","",$elements[0]->nodeValue));
            $sell_token_by_doge = $doge_last_price / $token_per_doge_sell_rate;
        }

        // ------------------------------ Token/XCN ------------------------------
        $output = $this->curlGet('https://hashbx.io/exchange/Token/XCN');
        $packtPageXpath = $this->returnXPathObject($output);	// Instantiating new XPath DOM object

        $elements = $packtPageXpath->query('//*[@id="order_buy"]/tr[1]/td[3]');	// Querying for <h1> (title of book)

        $token_per_xcn_buy_rate = 0.0;
        $buy_token_by_xcn = 0.0;
        if (!is_null($elements)) {
            $token_per_xcn_buy_rate = floatval(str_replace(",","",$elements[0]->nodeValue));
            $buy_token_by_xcn = $xcn_last_price / $token_per_xcn_buy_rate;
        }

        $elements = $packtPageXpath->query('//*[@id="order_sell"]/tr[1]/td[1]');	// Querying for <h1> (title of book)

        $token_per_xcn_sell_rate = 0.0;
        $sell_token_by_xcn = 0.0;
        if (!is_null($elements)) {
            $token_per_xcn_sell_rate = floatval(str_replace(",","",$elements[0]->nodeValue));
            $sell_token_by_xcn = $xcn_last_price / $token_per_xcn_sell_rate;
        }

        

        return view('token', [
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

            'token_per_doge_buy_rate' => $token_per_doge_buy_rate,
            'buy_token_by_doge' => $buy_token_by_doge,
            'token_per_doge_sell_rate' => $token_per_doge_sell_rate,
            'sell_token_by_doge' => $sell_token_by_doge,

            'token_per_xcn_buy_rate' => $token_per_xcn_buy_rate,
            'buy_token_by_xcn' => $buy_token_by_xcn,
            'token_per_xcn_sell_rate' => $token_per_xcn_sell_rate,
            'sell_token_by_xcn' => $sell_token_by_xcn,
        ]);
    }


    public function cloudmining(Request $request)
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
        }

        $elements = $packtPageXpath->query('//*[@id="order_sell"]/tr[1]/td[1]');	// Querying for <h1> (title of book)

        $token_per_btc_sell_rate = 0.0;
        $sell_token_by_btc = 0.0;
        if (!is_null($elements)) {
            $token_per_btc_sell_rate = floatval(str_replace(",","",$elements[0]->nodeValue));
            $sell_token_by_btc = $btc_last_price / $token_per_btc_sell_rate;
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
        }

        $elements = $packtPageXpath->query('//*[@id="order_sell"]/tr[1]/td[1]');	// Querying for <h1> (title of book)

        $token_per_bch_sell_rate = 0.0;
        $sell_token_by_bch = 0.0;
        if (!is_null($elements)) {
            $token_per_bch_sell_rate = floatval(str_replace(",","",$elements[0]->nodeValue));
            $sell_token_by_bch = $bch_last_price / $token_per_bch_sell_rate;
        }

        // ------------------------------ Token/HBX ------------------------------
        $output = $this->curlGet('https://hashbx.io/exchange/Token/HBX');
        $packtPageXpath = $this->returnXPathObject($output);	// Instantiating new XPath DOM object

        $elements = $packtPageXpath->query('//*[@id="order_buy"]/tr[1]/td[3]');	// Querying for <h1> (title of book)

        $token_per_hbx_buy_rate = 0.0;
        if (!is_null($elements)) {
            $token_per_hbx_buy_rate = floatval(str_replace(",","",$elements[0]->nodeValue));
        }

        $elements = $packtPageXpath->query('//*[@id="order_sell"]/tr[1]/td[1]');	// Querying for <h1> (title of book)

        $token_per_hbx_sell_rate = 0.0;
        if (!is_null($elements)) {
            $token_per_hbx_sell_rate = floatval(str_replace(",","",$elements[0]->nodeValue));
        }

        return view('cloudmining', [
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

            'token_per_hbx_buy_rate' => $token_per_hbx_buy_rate,
            'token_per_hbx_sell_rate' => $token_per_hbx_sell_rate,
            // 'buy_token_by_hbx' => $buy_token_by_hbx,
            // 'sell_token_by_hbx' => $sell_token_by_hbx,
        ]);
    }

    public function faq(Request $request)
    {
        return view('faq');
    }
}
