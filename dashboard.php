<!doctype html>
<html lang="en">

<head>
  <?php include "static/head.php"; ?>
</head>

<body class="vertical light">
  <div class="wrapper">
    <?php include "static/nav.php"; ?>
    <main role="main" class="main-content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="row align-items-center mb-2">
              <div class="col">
                <h2 class="h5 page-title">Welcome!</h2>
              </div>
              <div class="col-auto">
                <form class="form-inline">
                  <div class="form-group d-none d-lg-inline">
                    <label for="reportrange" class="sr-only">Date Ranges</label>
                    <div id="reportrange" class="px-2 py-2 text-muted">
                      <span class="small"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="button" class="btn btn-sm"><span class="fe fe-refresh-ccw fe-16 text-muted"></span></button>
                    <button type="button" class="btn btn-sm mr-2"><span class="fe fe-filter fe-16 text-muted"></span></button>
                  </div>
                </form>
              </div>
            </div>
            <div class="mb-2 align-items-center">
              <div class="card shadow mb-4">
                <div class="card-body">
                  <div class="row mt-1 align-items-center">
                    <div class="col-12 col-lg-4 text-left pl-4">
                      <p class="mb-1 small text-muted">Balance</p>
                      <span class="h3">$12,600</span>
                      <span class="small text-muted">+20%</span>
                      <span class="fe fe-arrow-up text-success fe-12"></span>
                      <p class="text-muted mt-2"> Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui </p>
                    </div>
                    <div class="col-6 col-lg-2 text-center py-4">
                      <p class="mb-1 small text-muted">Today</p>
                      <span class="h3">$2600</span><br />
                      <span class="small text-muted">+20%</span>
                      <span class="fe fe-arrow-up text-success fe-12"></span>
                    </div>
                    <div class="col-6 col-lg-2 text-center py-4 mb-2">
                      <p class="mb-1 small text-muted">Goal Value</p>
                      <span class="h3">$260</span><br />
                      <span class="small text-muted">+6%</span>
                      <span class="fe fe-arrow-up text-success fe-12"></span>
                    </div>
                    <div class="col-6 col-lg-2 text-center py-4">
                      <p class="mb-1 small text-muted">Completions</p>
                      <span class="h3">26</span><br />
                      <span class="small text-muted">+20%</span>
                      <span class="fe fe-arrow-up text-success fe-12"></span>
                    </div>
                    <div class="col-6 col-lg-2 text-center py-4">
                      <p class="mb-1 small text-muted">Conversion</p>
                      <span class="h3">6%</span><br />
                      <span class="small text-muted">-2%</span>
                      <span class="fe fe-arrow-down text-danger fe-12"></span>
                    </div>
                  </div>
                  <div class="chartbox mr-4">
                    <div id="areaChart"></div>
                  </div>
                </div> <!-- .card-body -->
              </div> <!-- .card -->
            </div>
          </div> <!-- .col-12 -->
        </div> <!-- .row -->
      </div> <!-- .container-fluid -->


    </main> <!-- main -->
  </div> <!-- .wrapper -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/moment.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/simplebar.min.js"></script>
  <script src='assets/js/daterangepicker.js'></script>
  <script src='assets/js/jquery.stickOnScroll.js'></script>
  <script src="assets/js/tinycolor-min.js"></script>
  <script src="assets/js/config.js"></script>
  <script src="assets/js/d3.min.js"></script>
  <script src="assets/js/topojson.min.js"></script>
  <script src="assets/js/datamaps.all.min.js"></script>
  <script src="assets/js/datamaps-zoomto.js"></script>
  <script src="assets/js/datamaps.custom.js"></script>
  <script src="assets/js/Chart.min.js"></script>
  <script>
    /* defind global options */
    Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
    Chart.defaults.global.defaultFontColor = colors.mutedColor;
  </script>
  <script src="assets/js/gauge.min.js"></script>
  <script src="assets/js/jquery.sparkline.min.js"></script>
  <script src="assets/js/apexcharts.min.js"></script>
  <script src="assets/js/apexcharts.custom.js"></script>
  <script src='assets/js/jquery.mask.min.js'></script>
  <script src='assets/js/select2.min.js'></script>
  <script src='assets/js/jquery.steps.min.js'></script>
  <script src='assets/js/jquery.validate.min.js'></script>
  <script src='assets/js/jquery.timepicker.js'></script>
  <script src='assets/js/dropzone.min.js'></script>
  <script src='assets/js/uppy.min.js'></script>
  <script src='assets/js/quill.min.js'></script>
  <script>
    $('.select2').select2({
      theme: 'bootstrap4',
    });
    $('.select2-multi').select2({
      multiple: true,
      theme: 'bootstrap4',
    });
    $('.drgpicker').daterangepicker({
      singleDatePicker: true,
      timePicker: false,
      showDropdowns: true,
      locale: {
        format: 'MM/DD/YYYY'
      }
    });
    $('.time-input').timepicker({
      'scrollDefault': 'now',
      'zindex': '9999' /* fix modal open */
    });
    /** date range picker */
    if ($('.datetimes').length) {
      $('.datetimes').daterangepicker({
        timePicker: true,
        startDate: moment().startOf('hour'),
        endDate: moment().startOf('hour').add(32, 'hour'),
        locale: {
          format: 'M/DD hh:mm A'
        }
      });
    }
    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
      $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }
    $('#reportrange').daterangepicker({
      startDate: start,
      endDate: end,
      ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      }
    }, cb);
    cb(start, end);
    $('.input-placeholder').mask("00/00/0000", {
      placeholder: "__/__/____"
    });
    $('.input-zip').mask('00000-000', {
      placeholder: "____-___"
    });
    $('.input-money').mask("#.##0,00", {
      reverse: true
    });
    $('.input-phoneus').mask('(000) 000-0000');
    $('.input-mixed').mask('AAA 000-S0S');
    $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
      translation: {
        'Z': {
          pattern: /[0-9]/,
          optional: true
        }
      },
      placeholder: "___.___.___.___"
    });
    // editor
    var editor = document.getElementById('editor');
    if (editor) {
      var toolbarOptions = [
        [{
          'font': []
        }],
        [{
          'header': [1, 2, 3, 4, 5, 6, false]
        }],
        ['bold', 'italic', 'underline', 'strike'],
        ['blockquote', 'code-block'],
        [{
            'header': 1
          },
          {
            'header': 2
          }
        ],
        [{
            'list': 'ordered'
          },
          {
            'list': 'bullet'
          }
        ],
        [{
            'script': 'sub'
          },
          {
            'script': 'super'
          }
        ],
        [{
            'indent': '-1'
          },
          {
            'indent': '+1'
          }
        ], // outdent/indent
        [{
          'direction': 'rtl'
        }], // text direction
        [{
            'color': []
          },
          {
            'background': []
          }
        ], // dropdown with defaults from theme
        [{
          'align': []
        }],
        ['clean'] // remove formatting button
      ];
      var quill = new Quill(editor, {
        modules: {
          toolbar: toolbarOptions
        },
        theme: 'snow'
      });
    }
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>
  <script>
    var uptarg = document.getElementById('drag-drop-area');
    if (uptarg) {
      var uppy = Uppy.Core().use(Uppy.Dashboard, {
        inline: true,
        target: uptarg,
        proudlyDisplayPoweredByUppy: false,
        theme: 'dark',
        width: 770,
        height: 210,
        plugins: ['Webcam']
      }).use(Uppy.Tus, {
        endpoint: 'https://master.tus.io/files/'
      });
      uppy.on('complete', (result) => {
        console.log('Upload complete! We’ve uploaded these files:', result.successful)
      });
    }
  </script>
  <script src="js/apps.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-56159088-1');
  </script>
</body>

</html>