<?php

namespace laravel_5_3\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Excel;
use laravel_5_3\User as User;
use PDF;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = 1;
        $registrations = DB::select('SELECT r.*,u.name AS user_name,c.name AS course_name 
                                FROM 
                                registration AS r 
                                JOIN users AS u
                                ON r.user_id = u.id
                                JOIN course AS c
                                ON r.course_id = c.id
                                WHERE r.status =' .$status);

        $courses = DB::select('select * from course');
        return view('report.index')
            ->with('courses', $courses)
            ->with('registrations', $registrations);
    }

    public function search($type = null)
    {
        if($type == null || $type == 0){
            $registrations = DB::select('SELECT r.*,u.name AS user_name,c.name AS course_name 
                                FROM 
                                registration AS r 
                                JOIN users AS u
                                ON r.user_id = u.id
                                JOIN course AS c
                                ON r.course_id = c.id');
        }
        else{
            $registrations = DB::select('SELECT r.*,u.name AS user_name,c.name AS course_name 
                                FROM 
                                registration AS r 
                                JOIN users AS u
                                ON r.user_id = u.id
                                JOIN course AS c
                                ON r.course_id = c.id
                                WHERE r.course_id =' .$type);

        }
        

        $courses = DB::select('select * from course');
        return view('report.index')
            ->with('courses', $courses)
            ->with('registrations', $registrations);
    }

    public function excel($type = null){
// ob means observer temporary data
            ob_end_clean();
            ob_start();

            if($type == null || $type == 0){
            $registrations = DB::select('SELECT r.*,u.name AS user_name,c.name AS course_name 
                                FROM 
                                registration AS r 
                                JOIN users AS u
                                ON r.user_id = u.id
                                JOIN course AS c
                                ON r.course_id = c.id');
            }
            else{
                $registrations = DB::select('SELECT r.*,u.name AS user_name,c.name AS course_name 
                                    FROM 
                                    registration AS r 
                                    JOIN users AS u
                                    ON r.user_id = u.id
                                    JOIN course AS c
                                    ON r.course_id = c.id
                                    WHERE r.course_id =' .$type);

            }

            // foreach($registrations as $registration){
            //     $jobs->date = Carbon::parse($jobs->date)->format('d-m-Y');
            //     $jobs->total = $jobs->total_car_amount + $jobs->total_service_amount + $jobs->total_medication_amount + $jobs->total_investigation_amount+$jobs->package_price;
            // }

            
            $totalAmount = 0;
            foreach($registrations as $registration){
                $totalAmount += $registration->fee;
            }

            Excel::create('regisrationreport', function($excel)use($registrations, $totalAmount) {
                $excel->sheet('regisrationreport', function($sheet)use($registrations, $totalAmount) {

                    $displayArray = array(); 
                    $count = 0;
                    foreach($registrations as $registration){
                        $count++;
                        $displayArray[$registration->id]["Student Name"] = $registration->user_name;
                        $displayArray[$registration->id]["Course Name"] = $registration->course_name;
                        $displayArray[$registration->id]["Registered at"] = $registration->created_at;
                        $displayArray[$registration->id]["Course Fee"] = $registration->fee;
                    }

                    if(count($displayArray) == 0){
                        $sheet->fromArray($displayArray);
                    }
                    else{
                        $count = $count +2;
                        $sheet->cells('A1:D1', function($cells) {
                            $cells->setBackground('#1976d3');
                            $cells->setFontSize(13);
                            $cells->setFontColor('#ffffff');
                        });
                        $sheet->fromArray($displayArray);

                        $appendedRow = array();

                        $appendedRow[0] = "";
                        $appendedRow[1] = "";
                        $appendedRow[2] = "Grand Total";
                        $appendedRow[3] = $totalAmount;                                        

                        $sheet->appendRow(
                            $appendedRow
                        );
                        $sheet->cells('A'.$count.':D'.$count, function($cells) {
                            $cells->setBackground('#1976d3');
                            $cells->setFontSize(13);
                            $cells->setFontColor('#ffffff');
                        });
                    }
                });
            })
                ->download('xls');
            ob_flush();
            // flush means clean
            return Redirect();
        
    }

    public function pdfPreview($type = null)
    {
        if($type == null || $type == 0){
            $registrations = DB::select('SELECT r.*,u.name AS user_name,c.name AS course_name 
                                FROM 
                                registration AS r 
                                JOIN users AS u
                                ON r.user_id = u.id
                                JOIN course AS c
                                ON r.course_id = c.id');
            }
        else{
            $registrations = DB::select('SELECT r.*,u.name AS user_name,c.name AS course_name 
                                FROM 
                                registration AS r 
                                JOIN users AS u
                                ON r.user_id = u.id
                                JOIN course AS c
                                ON r.course_id = c.id
                                WHERE r.course_id =' .$type);

        }
              
    //   $users = User::orderBy('id','asc')->get();
    // $users = User::all();
      $view = \View::make('report.pdf_content', ['registratons'=>$registrations]);
      $html_content = $view->render();
      PDF::SetTitle("List of users");
      PDF::AddPage();

    // writeHTML($html, $ln=true, $fill=false, $reseth=false, $cell=false, $align='')
    // writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true)
    
      PDF::writeHTML($html_content, true, false, true, false, '');
      // D is the change of these two functions. Including D parameter will avoid 
      // loading PDF in browser and allows downloading directly
      PDF::Output('userlist.pdf');

    }

    public function pdfExport($type = null)
    {
        if($type == null || $type == 0){
            $registrations = DB::select('SELECT r.*,u.name AS user_name,c.name AS course_name 
                                FROM 
                                registration AS r 
                                JOIN users AS u
                                ON r.user_id = u.id
                                JOIN course AS c
                                ON r.course_id = c.id');
            }
        else{
            $registrations = DB::select('SELECT r.*,u.name AS user_name,c.name AS course_name 
                                FROM 
                                registration AS r 
                                JOIN users AS u
                                ON r.user_id = u.id
                                JOIN course AS c
                                ON r.course_id = c.id
                                WHERE r.course_id =' .$type);

        }
              
    //   $users = User::orderBy('id','asc')->get();
    // $users = User::all();
      $view = \View::make('report.pdf_content', ['registratons'=>$registrations]);
      $html_content = $view->render();
      PDF::SetTitle("List of users");
      PDF::AddPage();

    // writeHTML($html, $ln=true, $fill=false, $reseth=false, $cell=false, $align='')
    // writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true)
    
      PDF::writeHTML($html_content, true, false, true, false, '');
      // D is the change of these two functions. Including D parameter will avoid 
      // loading PDF in browser and allows downloading directly
        PDF::Output('userlist.pdf', 'D');   
    }


      

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
