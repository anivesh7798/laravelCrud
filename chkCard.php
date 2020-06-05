<!DOCTYPE html>
<html lang="en">

<?php require_once('link.php');  ?>
<body>

  <div id="wrapper">

    <!-- start header -->
  <?php require_once('header.php');  ?>
    <!-- end header -->

    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="inner-heading">
              <ul class="breadcrumb">
                <li><a href="index.php">Home</a> <i class="icon-angle-right"></i></li>
                <li class="active">Check Card No.</li>
              </ul>
              <h2>Check Card No.</h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="content">
            <div class="container">
                <div class="row">

              <div class="span12">

                <div class="solidline">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="span12">
            <form>
                  <div class="input-append">
                    <input class="span2" id="card_no" name="card_no" type="text" placeholder="Enter Card No...">
                    <button class="btn btn-theme" onclick=" GetCardDetails('getCardData')" type="button">Search</button>
                  </div>
                </form>
                <table class="table table-bordered">
                  <thead>
                    <tr>
        <th>Name</th>
        <th>Card No</th>
        <th>Mobile</th>
        <th>Issue Date</th>
      <th>Status</th>
       <th>Complementary Room</th>
      </tr>
                  </thead>
                  <tbody id="showData">
                    
                 
                  </tbody>
                </table>
              </div>
            </div>
            </div>
            <!-- divider -->

    </section>
  <script type="text/javascript">
      function GetCardDetails(action)
    {
      var id=$("#card_no").val();
      if(id !=''){
      $.ajax({
        url :  "regencyAdmin/action_getdata.php",
        type : "POST",
       // datatype : "json",
        data :
        {
          'id'   : id,
          'action' : action
        }
        ,
        success:function(res)
        {
        //  alert(res.card_no);
          if(res==0){
            alert("Invalid Card Number");
            
          }
          else{
            $("#showData").html(res);
          }
        }
      }
            );
    }
    else{
      alert("please fill Card NO");
    }
    }
  </script>
<?php require_once('footer.php');  ?>
  </div>
  <?php require_once('script.php');  ?>

</body>

</html>
