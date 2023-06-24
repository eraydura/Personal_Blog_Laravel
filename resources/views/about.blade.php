@extends('layout.layout')

@section('content')
<div class="flex-center position-ref full-height2">
    <div class="content">
        <div class="title m-b-md">
            About Me
        </div>
        <h2>Working Experience</h2>
        <table>
          <tr>
            <th>Work Place</th>
            <th>Department</th>
            <th>Start</th>
            <th>Finish</th>
          </tr>
          @foreach($work as $work)
          <tr>
              <td>
                {{ $work['Name'] }} 
              </td>
              <td>
                {{ $work['Department'] }}
              </td>
              <td>
                {{ $work['Start'] }}  
              </td>
              <td>
                {{ $work['Finish'] }}
              </td>
          </tr>
          @endforeach
        </table>

        <h2>Computer Languages</h2>

        <table>
          <tr>
            <th>Index</th>
            <th>Language</th>
            <th>Value</th>
          </tr>
          @foreach($programlama as $programlama)
            <tr>
                <td>
                  {{ $loop->index+1 }}
                </td>
                <td>
                  {{ $programlama['Language'] }}
                </td>
                <td>
                  <input type="range" min="1" max="10" value={{ $programlama['Value'] }} disabled> 
                </td>
            </tr>
          @endforeach
        </table>


        <h2>Education Experience</h2>
        <table>
          <tr>
            <th>University</th>
            <th>Department</th>
            <th>Start</th>
            <th>Finish</th>
          </tr>
          @foreach($school as $school)
          <tr>
              <td>
                 {{ $school['School'] }} 
              </td>
              <td>
                 {{ $school['Department'] }}
              </td>
              <td>
                 {{ $school['Start'] }}
              </td>
              <td>
                 {{ $school['Finish'] }}
              </td>
          </tr>
          @endforeach
        </table>

        <h2>Language</h2>
        
        <table>
          <tr>
            <th>Language</th>
            <th>Speaking</th>
            <th>Reading</th>
            <th>Listening</th>
          </tr>
          @foreach($language as $language)
            <tr>
                <td>
                    {{ $language['Language'] }}
                </td>
                <td>
                   <input type="range" min="1" max="10" value={{ $language['Speaking'] }} disabled>
                </td>
                <td>
                   <input type="range" min="1" max="10" value={{ $language['Reading'] }} disabled> 
                </td>
                <td>
                   <input type="range" min="1" max="10" value={{ $language['Listening'] }} disabled>
                </td>
             </tr>
          @endforeach
        </table>



    </div>
</div>
@endsection