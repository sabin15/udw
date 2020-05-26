<?php
    if(!isset($_SESSION)) 
    { 
        session_start();
        if(!isset($_SESSION['type']) || $_SESSION['type']!='student'){
          header("Location:/udw/index.php");
        }         
      
    } 
?>
<?php require('header.php')?>

      <div class="jumbotron-fluid">
        <button class="btn btn-primary" onclick="lecture_timetable()">Lecture</button>
        <button class="btn btn-primary" onclick="tutorial_timetable()">Tutorial</button>
      </div>

      <div class="cd-schedule cd-schedule--loading margin-top-lg margin-bottom-lg js-cd-schedule" id="lecture-timetable">
        <h3>Lecture Timetable</h3>
        <div class="cd-schedule__timeline">
          <ul>
            <li><span>09:00</span></li>
            <li><span>09:30</span></li>
            <li><span>10:00</span></li>
            <li><span>10:30</span></li>
            <li><span>11:00</span></li>
            <li><span>11:30</span></li>
            <li><span>12:00</span></li>
            <li><span>12:30</span></li>
            <li><span>13:00</span></li>
            <li><span>13:30</span></li>
            <li><span>14:00</span></li>
            <li><span>14:30</span></li>
            <li><span>15:00</span></li>
            <li><span>15:30</span></li>
            <li><span>16:00</span></li>
            <li><span>16:30</span></li>
            <li><span>17:00</span></li>
            <li><span>17:30</span></li>
            <li><span>18:00</span></li>
          </ul>
        </div> <!-- .cd-schedule__timeline -->

        <div class="cd-schedule__events">
          <ul>
            <li class="cd-schedule__group">
              <div class="cd-schedule__top-info"><span>Monday</span></div>

              <ul>
                <li class="cd-schedule__event">
                  <a data-start="09:30" data-end="10:30" data-content="event-abs-circuit" data-event="event-1" href="#0">
                    <em class="cd-schedule__name">Python Programming</em>
                  </a>
                </li>

                <li class="cd-schedule__event">
                  <a data-start="11:00" data-end="12:30" data-content="event-rowing-workout" data-event="event-2" href="#0">
                    <em class="cd-schedule__name">Data Science</em>
                  </a>
                </li>

                <li class="cd-schedule__event">
                  <a data-start="14:00" data-end="15:15"  data-content="event-yoga-1" data-event="event-3" href="#0">
                    <em class="cd-schedule__name">Big Data</em>
                  </a>
                </li>
              </ul>
            </li>

            <li class="cd-schedule__group">
              <div class="cd-schedule__top-info"><span>Tuesday</span></div>

              <ul>
                <li class="cd-schedule__event">
                  <a data-start="10:00" data-end="11:00"  data-content="event-rowing-workout" data-event="event-2" href="#0">
                    <em class="cd-schedule__name">Computer Networks</em>
                  </a>
                </li>

                <li class="cd-schedule__event">
                  <a data-start="11:30" data-end="13:00"  data-content="event-restorative-yoga" data-event="event-4" href="#0">
                    <em class="cd-schedule__name">Java Programming</em>
                  </a>
                </li>

                <li class="cd-schedule__event">
                  <a data-start="13:30" data-end="15:00" data-content="event-abs-circuit" data-event="event-1" href="#0">
                    <em class="cd-schedule__name">Software Engineering</em>
                  </a>
                </li>

                <li class="cd-schedule__event">
                  <a data-start="15:45" data-end="16:45"  data-content="event-yoga-1" data-event="event-3" href="#0">
                    <em class="cd-schedule__name">Artificial Intelligence</em>
                  </a>
                </li>
              </ul>
            </li>

            <li class="cd-schedule__group">
              <div class="cd-schedule__top-info"><span>Wednesday</span></div>

              <ul>
                <li class="cd-schedule__event">
                  <a data-start="09:00" data-end="10:15" data-content="event-restorative-yoga" data-event="event-4" href="#0">
                    <em class="cd-schedule__name">Python Programming</em>
                  </a>
                </li>

                <li class="cd-schedule__event">
                  <a data-start="10:45" data-end="11:45" data-content="event-yoga-1" data-event="event-3" href="#0">
                    <em class="cd-schedule__name">Java Programming</em>
                  </a>
                </li>

                <li class="cd-schedule__event">
                  <a data-start="12:00" data-end="13:45"  data-content="event-rowing-workout" data-event="event-2" href="#0">
                    <em class="cd-schedule__name">Big Data</em>
                  </a>
                </li>

                <li class="cd-schedule__event">
                  <a data-start="13:45" data-end="15:00" data-content="event-yoga-1" data-event="event-3" href="#0">
                    <em class="cd-schedule__name">Data Science</em>
                  </a>
                </li>
              </ul>
            </li>

            <li class="cd-schedule__group">
              <div class="cd-schedule__top-info"><span>Thursday</span></div>

              <ul>
                <li class="cd-schedule__event">
                  <a data-start="09:30" data-end="10:30" data-content="event-abs-circuit" data-event="event-1" href="#0">
                    <em class="cd-schedule__name">Big Data</em>
                  </a>
                </li>

                <li class="cd-schedule__event">
                  <a data-start="12:00" data-end="13:45" data-content="event-restorative-yoga" data-event="event-4" href="#0">
                    <em class="cd-schedule__name">Data Science</em>
                  </a>
                </li>

                <li class="cd-schedule__event">
                  <a data-start="15:30" data-end="16:30" data-content="event-abs-circuit" data-event="event-1" href="#0">
                    <em class="cd-schedule__name">Python Programming</em>
                  </a>
                </li>

                <li class="cd-schedule__event">
                  <a data-start="17:00" data-end="18:30"  data-content="event-rowing-workout" data-event="event-2" href="#0">
                    <em class="cd-schedule__name">Software Engineering</em>
                  </a>
                </li>
              </ul>
            </li>

            <li class="cd-schedule__group">
              <div class="cd-schedule__top-info"><span>Friday</span></div>

              <ul>
                <li class="cd-schedule__event">
                  <a data-start="10:00" data-end="11:00"  data-content="event-rowing-workout" data-event="event-2" href="#0">
                    <em class="cd-schedule__name">Java Programming</em>
                  </a>
                </li>

                <li class="cd-schedule__event">
                  <a data-start="12:30" data-end="14:00" data-content="event-abs-circuit" data-event="event-1" href="#0">
                    <em class="cd-schedule__name">Software Engineering</em>
                  </a>
                </li>

                <li class="cd-schedule__event">
                  <a data-start="15:45" data-end="16:45"  data-content="event-yoga-1" data-event="event-3" href="#0">
                    <em class="cd-schedule__name">Data Science</em>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>

        <div class="cd-schedule-modal">
          <header class="cd-schedule-modal__header">
            <div class="cd-schedule-modal__content">
              <span class="cd-schedule-modal__date"></span>
              <h3 class="cd-schedule-modal__name"></h3>
            </div>

            <div class="cd-schedule-modal__header-bg"></div>
          </header>

          <div class="cd-schedule-modal__body">
            <div class="cd-schedule-modal__event-info">
              <div class="container-fluid">
                <h2>Python</h2>
                <table class="table table-hover">

                  <tbody>
                    <tr>
                      <td class="col-md-1">Lecturer</td>
                      <td class="col-md-1">Sabin Shrestha</td>
                    </tr>
                    <tr>
                      <td>Building</td>
                      <td>Engineering Building</td>
                    </tr>
                    <tr>
                      <td>Classroom</td>
                      <td>EC 204</td>
                    </tr>
                    <tr>
                      <td>Time</td>
                      <td>9.30 - 10.30</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="cd-schedule-modal__body-bg">            </div>
          </div>

          <a href="#0" class="cd-schedule-modal__close text-replace">Close</a>
        </div>

        <div class="cd-schedule__cover-layer"></div>
      </div> <!-- .cd-schedule -->

      <div class="cd-schedule cd-schedule--loading margin-top-lg margin-bottom-lg js-cd-schedule" id="tutorial-timetable">
        <h3>Tutorial Timetable</h3>
        <div class="cd-schedule__timeline">
          <ul>
            <li><span>09:00</span></li>
            <li><span>09:30</span></li>
            <li><span>10:00</span></li>
            <li><span>10:30</span></li>
            <li><span>11:00</span></li>
            <li><span>11:30</span></li>
            <li><span>12:00</span></li>
            <li><span>12:30</span></li>
            <li><span>13:00</span></li>
            <li><span>13:30</span></li>
            <li><span>14:00</span></li>
            <li><span>14:30</span></li>
            <li><span>15:00</span></li>
            <li><span>15:30</span></li>
            <li><span>16:00</span></li>
            <li><span>16:30</span></li>
            <li><span>17:00</span></li>
            <li><span>17:30</span></li>
            <li><span>18:00</span></li>
          </ul>
        </div> <!-- .cd-schedule__timeline -->

        <div class="cd-schedule__events">
          <ul>
            <li class="cd-schedule__group">
              <div class="cd-schedule__top-info"><span>Monday</span></div>

              <ul>
                <li class="cd-schedule__event">
                  <a data-start="09:30" data-end="10:30" data-content="event-abs-circuit" data-event="event-1" href="#0">
                    <em class="cd-schedule__name">Python Programming</em>
                  </a>
                </li>

                <li class="cd-schedule__event">
                  <a data-start="11:00" data-end="12:30" data-content="event-rowing-workout" data-event="event-2" href="#0">
                    <em class="cd-schedule__name">Data Science</em>
                  </a>
                </li>

                <li class="cd-schedule__event">
                  <a data-start="14:00" data-end="15:15"  data-content="event-yoga-1" data-event="event-3" href="#0">
                    <em class="cd-schedule__name">Big Data</em>
                  </a>
                </li>
              </ul>
            </li>

            <li class="cd-schedule__group">
              <div class="cd-schedule__top-info"><span>Tuesday</span></div>

              <ul>
                <li class="cd-schedule__event">
                  <a data-start="10:00" data-end="11:00"  data-content="event-rowing-workout" data-event="event-2" href="#0">
                    <em class="cd-schedule__name">Computer Networks</em>
                  </a>
                </li>

                <li class="cd-schedule__event">
                  <a data-start="11:30" data-end="13:00"  data-content="event-restorative-yoga" data-event="event-4" href="#0">
                    <em class="cd-schedule__name">Java Programming</em>
                  </a>
                </li>

                <li class="cd-schedule__event">
                  <a data-start="13:30" data-end="15:00" data-content="event-abs-circuit" data-event="event-1" href="#0">
                    <em class="cd-schedule__name">Software Engineering</em>
                  </a>
                </li>

                <li class="cd-schedule__event">
                  <a data-start="15:45" data-end="16:45"  data-content="event-yoga-1" data-event="event-3" href="#0">
                    <em class="cd-schedule__name">Artificial Intelligence</em>
                  </a>
                </li>
              </ul>
            </li>

            <li class="cd-schedule__group">
              <div class="cd-schedule__top-info"><span>Wednesday</span></div>

              <ul>
                <li class="cd-schedule__event">
                  <a data-start="09:00" data-end="10:15" data-content="event-restorative-yoga" data-event="event-4" href="#0">
                    <em class="cd-schedule__name">Python Programming</em>
                  </a>
                </li>

                <li class="cd-schedule__event">
                  <a data-start="10:45" data-end="11:45" data-content="event-yoga-1" data-event="event-3" href="#0">
                    <em class="cd-schedule__name">Java Programming</em>
                  </a>
                </li>

                <li class="cd-schedule__event">
                  <a data-start="12:00" data-end="13:45"  data-content="event-rowing-workout" data-event="event-2" href="#0">
                    <em class="cd-schedule__name">Big Data</em>
                  </a>
                </li>

                <li class="cd-schedule__event">
                  <a data-start="13:45" data-end="15:00" data-content="event-yoga-1" data-event="event-3" href="#0">
                    <em class="cd-schedule__name">Data Science</em>
                  </a>
                </li>
              </ul>
            </li>

            <li class="cd-schedule__group">
              <div class="cd-schedule__top-info"><span>Thursday</span></div>

              <ul>
                <li class="cd-schedule__event">
                  <a data-start="09:30" data-end="10:30" data-content="event-abs-circuit" data-event="event-1" href="#0">
                    <em class="cd-schedule__name">Big Data</em>
                  </a>
                </li>

                <li class="cd-schedule__event">
                  <a data-start="12:00" data-end="13:45" data-content="event-restorative-yoga" data-event="event-4" href="#0">
                    <em class="cd-schedule__name">Data Science</em>
                  </a>
                </li>

                <li class="cd-schedule__event">
                  <a data-start="15:30" data-end="16:30" data-content="event-abs-circuit" data-event="event-1" href="#0">
                    <em class="cd-schedule__name">Python Programming</em>
                  </a>
                </li>

                <li class="cd-schedule__event">
                  <a data-start="17:00" data-end="18:30"  data-content="event-rowing-workout" data-event="event-2" href="#0">
                    <em class="cd-schedule__name">Software Engineering</em>
                  </a>
                </li>
              </ul>
            </li>

            <li class="cd-schedule__group">
              <div class="cd-schedule__top-info"><span>Friday</span></div>

              <ul>
                <li class="cd-schedule__event">
                  <a data-start="10:00" data-end="11:00"  data-content="event-rowing-workout" data-event="event-2" href="#0">
                    <em class="cd-schedule__name">Java Programming</em>
                  </a>
                </li>

                <li class="cd-schedule__event">
                  <a data-start="12:30" data-end="14:00" data-content="event-abs-circuit" data-event="event-1" href="#0">
                    <em class="cd-schedule__name">Software Engineering</em>
                  </a>
                </li>

                <li class="cd-schedule__event">
                  <a data-start="15:45" data-end="16:45"  data-content="event-yoga-1" data-event="event-3" href="#0">
                    <em class="cd-schedule__name">Data Science</em>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>

        <div class="cd-schedule-modal">
          <header class="cd-schedule-modal__header">
            <div class="cd-schedule-modal__content">
              <span class="cd-schedule-modal__date"></span>
              <h3 class="cd-schedule-modal__name"></h3>
            </div>

            <div class="cd-schedule-modal__header-bg"></div>
          </header>

          <div class="cd-schedule-modal__body">
            <div class="cd-schedule-modal__event-info"></div>
            <div class="cd-schedule-modal__body-bg"></div>
          </div>

          <a href="#0" class="cd-schedule-modal__close text-replace">Close</a>
        </div>

        <div class="cd-schedule__cover-layer"></div>
      </div> <!-- .cd-schedule -->

<?php require('footer.php')?>
