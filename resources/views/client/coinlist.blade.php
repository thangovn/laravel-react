<link href="{{ asset('css/paul.css') }}" rel="stylesheet" />
<script type="text/javascript" src="{{asset('js/jquery-1.7.2.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.sparkline.js')}}"></script>

    <script type="text/javascript">
    $(function() {
       
        /** This code runs when everything has been loaded on the page */
        /* Inline sparklines take their values from the contents of the tag */
        $('.inlinesparkline-red span').sparkline(
          'html', {
            type: 'line',
            lineColor: "red",
            fillColor: false,
            minSpotColor: false,
            maxSpotColor: false,
            //spotColor: COLOR_CODE,
            //highlightSpotColor: COLOR_CODE,
            spotRadius: 0,
            height: '2rem',
            width: '10rem',
            //numberDigitGroupSep: THOUSANDS_SEPARATOR,
            //numberDecimalMark: DECIMAL_POINT
          })
        .addClass('sparkline-added');


        $('.inlinesparkline-green span').sparkline(
          'html', {
            type: 'line',
            lineColor: "green",
            fillColor: false,
            minSpotColor: false,
            maxSpotColor: false,
            //spotColor: COLOR_CODE,
            //highlightSpotColor: COLOR_CODE,
            spotRadius: 0,
            height: '2rem',
            width: '10rem',
            //numberDigitGroupSep: THOUSANDS_SEPARATOR,
            //numberDecimalMark: DECIMAL_POINT
          })
        .addClass('sparkline-added');
    });
    </script>
<section id="crypto-section" class="container center-align crypto-table shadow-sm">
    <div id="app">
        <table id="table" class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Coin</th>
                <th>Price</th>
                <th>24h Change</th>
                <th class="th-chart"  colspan="2">Chart</th> 
            </tr>
            </thead>
        <?php
          $symbols = [
            "BTC",
            "ETH",
            "BNB",
            "BCH",
            "LTC",
            "USDT",
            "DOGE",
            "DASH",
        ];
        
        // Symbols url
        $symbolsUrl = "https://min-api.cryptocompare.com/data/pricemultifull?fsyms=" . implode(",", $symbols) . "&tsyms=USD";

        // Read JSON file
        $json_data = file_get_contents($symbolsUrl);

        // Decode JSON data into PHP array
        $response_data = json_decode($json_data);

        // // All user data exists in 'data' object
        $user_data = $response_data->DISPLAY;
        // // Cut long data into small & select only first 10 records
        // $user_data = array_slice($user_data, 0, 9);

        // // Print data if need to debug

        // // Traverse array and display user data
        $count = 1;
        
        foreach ($user_data as $key=>$value) {
            $item = $value->USD;
            echo '<tbody>';
            echo '<tr>';
                echo '<td>';
                echo $count;
                echo '</td>';
                echo '<td>';
                switch ($key) {
                    case "BTC": 
                echo '<img src="/images/coins/'.$key.'.png"/> Bitcoin -'.  $key;
                      break;
                    case "ETH":
                echo '<img src="/images/coins/'.$key.'.png"/>  Ethereum -'.  $key;
                      break;
                    case "BNB":
                     echo '<img src="/images/coins/'.$key.'.png"/>  Binance coin -'.  $key;
                      break;
                    case "BCH":
                       echo '<img src="/images/coins/'.$key.'.png"/>  Bitcon Cash -'.  $key;
                        break;
                        case "LTC":
                           echo '<img src="/images/coins/'.$key.'.png"/>  Litecoin -'.  $key;
                            break;
                        case "USDT":
                           echo '<img src="/images/coins/'.$key.'.png"/>  TetherUS -'.  $key;
                            break; 
                            case "DOGE":
                               echo '<img src="/images/coins/'.$key.'.png"/>  Dogecoin  -'.  $key;
                                break;
                            case "DASH":
                               echo '<img src="/images/coins/'.$key.'.png"/>  Dash -'.  $key;
                                break;
                  }
                echo '</td>';
                echo '<td>';
                echo $item->PRICE;
                echo '</td>';
                echo '<td>';
                if ($item->CHANGEPCT24HOUR > 0) {
                    echo "<span class='green-text'>" . $item->CHANGEPCT24HOUR . " % </span>";
                } else {
                    echo  "<span class='red-text'>" . $item->CHANGEPCT24HOUR . " % </span>";
                }
                if ($item->CHANGEPCT24HOUR > 0) {
                    echo '<td class="inlinesparkline-green th-chart" >';
                } else {
                    echo '<td class="inlinesparkline-red th-chart" >';
                }
                echo '<span class="red-text" values="'.getHistory($key).'"></span> 24H';
                echo '</td>';
                echo '<td class="th-chart">';    
                echo '<span class="red-text" values=""><button type="button" class="btn btn-secondary d-flex"><span class="material-symbols-outlined">
                chevron_right
                </span> </button></span>';
                echo '</td>';
            echo '</tr>';
            echo '</tbody>';
            $count++;
        }

        function getHistory($key)
        {
            $res = [];
            $url = "https://min-api.cryptocompare.com/data/v2/histoday?fsym=".$key."&tsym=USD&limit=10&e=CCCAGG";
            // Read JSON file
            $json_data = file_get_contents($url);

            // Decode JSON data into PHP array
            $response_data = json_decode($json_data);

            // // All user data exists in 'data' object
            $data = $response_data->Data;
            if ($data && $data->Data) {
                foreach ($data->Data as $element) {
                    array_push($res,  $element->close);
                }
            }
            return implode(",", $res);
        }

        ?>
        </table>
    </div>
</section>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="{{asset('js/coinlist.js')}}"></script>    
