<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<style>
  
</style>
</head>
<body>

<p class="firstP">This is a paragraph.</p>
<p>This is another paragraph.</p>

<ol>
  <li>List item 1</li>
  <li>List item 2</li>
  <li>List item 3</li>
</ol>

<button id="btn1">Append text</button>
<button id="btn2">Append list items</button>
<script>
// $(document).ready(function(){
  const Item = document.querySelector('p.firstP');
  console.log(Item);
  document.querySelector("#btn1").addEventListener('click',function(){
    Item.appendChild(Item);
    console.log('click');
  });

  // $("#btn2").click(function(){
  //   $("ol").append("<li>Appended item</li>");
  // });
// });
</script>
</body>
</html>
