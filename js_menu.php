<!-- Start by creating the menu items -->

<div class="tabs">

  <!--
    Create a div
    assign an id and a class attribute
    remember both the id and class attribute when you move on
    look below for an example
  -->
  <div id="tab_1" class="tab_1"></div>

</div>

<!-- download the jquery file from the net -->
<script src="jquery-1.9.1.min.js"></script>

<div class="category">
  <a href="category"><br>category</a>
</div>

<!--
  create the items connected to the menu
  below is an example, you can add more if you want
-->
<div class="class_name">
  <a href="href_value">Call it something</a>
</div>

<div class="class_name_two">
  <a href="href_value">Call it something</a>
</div>

<!-- 
  this is the actual script that does all the work
  you connect the menu items to the divs created in step 4
-->
<script>
      $('div').each(function(){
        $(this).click(function(){
          if(this.id === 'tab_1'){
            $('class_name').toggleClass('display');
          } else if (this.id === 'tab_2') {
            $('class_name_two').toggleClass('display');
          }
          //... keep adding more conditionals here..
        });
      });
</script>
