<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Admin</title>

<!-- Bootstrap core CSS -->
<link href="{{ url('assets\plugins\bootstrap\css\bootstrap.min.css') }}" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="{{ url('assets\plugins\font-awesome\css\font-awesome.min.css') }}" rel="stylesheet" type="text/css">

<!-- Custom fonts for this template -->
<link href="{{ url('assets\plugins\themify\css\themify.css') }}" rel="stylesheet" type="text/css">

<!-- Angular Tooltip Css -->
<link href="{{ url('assets\plugins\angular-tooltip\angular-tooltips.css') }}" rel="stylesheet">

<!-- Page level plugin CSS -->
<link href="{{ url('assets\dist\css\animate.css') }}" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="{{ url('assets\dist\css\glovia.css') }}" rel="stylesheet">
<link href="{{ url('assets\dist\css\glovia-responsive.css') }}" rel="stylesheet">

<!-- Custom styles for Color -->
<link id="jssDefault" rel="stylesheet" href="{{ url('assets\dist\css\skins\default.css') }}">
<script>
	

function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

	</script>
    <script>
    function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }

    </script>