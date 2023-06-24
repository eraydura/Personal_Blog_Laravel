<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class about extends Controller
{
    public function index(){
        $language=[
            ['Language'=>'Turkish','Speaking'=>'10' ,'Reading'=>'10' ,'Listening'=>'10'],
            ['Language'=>'English','Speaking'=>'8' ,'Reading'=>'8' ,'Listening'=>'8'],
            ['Language'=>'German','Speaking'=>'4' ,'Reading'=>'6' ,'Listening'=>'5'],
            ['Language'=>'Spanish','Speaking'=>'3' ,'Reading'=>'4' ,'Listening'=>'3'],
        ];
    
        $school=[
            ['School'=>'Yaşar University','Department'=>'Computer Engineering(MA)' ,'Start'=>'2022' ,'Finish'=>'2024'],
            ['School'=>'Izmir University Of Economics','Department'=>'Computer Engineering(BA)' ,'Start'=>'2015' ,'Finish'=>'2020'],
            ['School'=>'Sofia Kliment Ohridski University','Department'=>'Computer Engineering(Erasmus)' ,'Start'=>'2019' ,'Finish'=>'2020'],
            ['School'=>'Politecnico di Milano','Department'=>'Computer Engineering(MA)(NOT CONTINUE)' ,'Start'=>'2020' ,'Finish'=>'NOT CONTINUE'],
        ];
    
        $programlama=[
            ['Language'=>'Python','Value'=>'7' ],
            ['Language'=>'PHP','Value'=>'8' ],
            ['Language'=>'Javascript','Value'=>'8' ],
            ['Language'=>'Node.js','Value'=>'7' ],
            ['Language'=>'React.js','Value'=>'7' ],
            ['Language'=>'Flutter','Value'=>'9' ],
            ['Language'=>'React-Native','Value'=>'8' ],
            ['Language'=>'JAVA','Value'=>'6'],
            ['Language'=>'HTML/CSS','Value'=>'10'],
            ['Language'=>'C#','Value'=>'6'],
        ];
    
        $work=[
            ['Name'=>'Qreal','Department'=>'Software Engineer' ,'Start'=>'June 2021' ,'Finish'=>'June 2023'],
            ['Name'=>'Deep Sport','Department'=>'Mobile Developer' ,'Start'=>'March 2021' ,'Finish'=>'June 2021'],
            ['Name'=>'Izmir University of Economics','Department'=>'Student Assitance' ,'Start'=>'September 2019' ,'Finish'=>'January 2020'],
            ['Name'=>'Mazars Denge','Department'=>'Software Engineer(Internship)' ,'Start'=>'June 2018' ,'Finish'=>'October 2018'],
        ];
    
        /* localhost:8000/home?name=lugie&age=12 
        $name = request('name');
        $age = request('age'); */
    
        return view('about',['work' => $work, 'programlama' => $programlama, 'school' => $school, 'language' => $language]);

    }
}
