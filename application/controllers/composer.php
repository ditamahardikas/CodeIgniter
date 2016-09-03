<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
use SimpleExcel\SimpleExcel;
use Carbon\Carbon;

class Composer extends CI_Controller {
  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
  }

  public function test_composer1()
  {
    $excel = new SimpleExcel('xml'); // instantiate new object (will automatically construct the parser & writer type as XML)
 
    $excel->writer->setData(
      array
      (
        array('ID', 'Name', 'Kode' ),
        array('1', 'Kab. Bogor', '1' ),
        array('2', 'Kab. Cianjur', '1' ),
        array('3', 'Kab. Sukabumi', '1' ),
        array('4', 'Kab. Tasikmalaya', '2' )
      )
    ); // add some data to the writer
    $excel->writer->saveFile('example'); // save the file with specified name (example.xml)
    // and specified target (default to browser)
  }
  public function test_composer2()
  {
    $this->load->view('v_header');
    printf("Right now is %s", Carbon::now()->toDateTimeString());
    printf("----> now in Jakarta is %s", Carbon::now('Asia/Jakarta'));  //implicit __toString()
    $tomorrow = Carbon::now()->addDay();
    $lastWeek = Carbon::now()->subWeek();
    $nextSummerOlympics = Carbon::createFromDate(2012)->addYears(4);

    $officialDate = Carbon::now()->toRfc2822String();

    $howOldAmI = Carbon::createFromDate(1975, 5, 21)->age;

    $noonTodayLondonTime = Carbon::createFromTime(12, 0, 0, 'Europe/London');

    $worldWillEnd = Carbon::createFromDate(2012, 12, 21, 'GMT');

    // Don't really want to die so mock now
    Carbon::setTestNow(Carbon::createFromDate(2000, 1, 1));

    // comparisons are always done in UTC
    if (Carbon::now()->gte($worldWillEnd)) {
        die();
    }

    // Phew! Return to normal behaviour
    Carbon::setTestNow();

    if (Carbon::now()->isWeekend()) {
        echo 'Party!';
    }
    echo Carbon::now()->subMinutes(2)->diffForHumans(); // '2 minutes ago'

    // ... but also does 'from now', 'after' and 'before'
    // rolling up to seconds, minutes, hours, days, months, years

    $daysSinceEpoch = Carbon::createFromTimestamp(0)->diffInDays();

  
      }
}
?>