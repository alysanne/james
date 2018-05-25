<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        
        <title>Bond Movies</title>
        
                
        <?php
        include "readFile.php";
        ?>
        
    </head>
    <body>
        <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Channel</th>
      <th scope="col">9-10</th>
      <th scope="col">10-11</th>
      <th scope="col">11-12</th>
      <th scope="col">12-13</th>
      <th scope="col">13-14</th>
      <th scope="col">14-15</th>
     </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="rows" class="text-center">Sean Connery</th>
      <td colspan="2"></td>
      <td colspan="2" class="text-center"><?=$movies[0]->title?></td>
      <td colspan="2"></td>
    </tr>
    <tr>
      <th scope="row" class="text-center">George Lazenby</th>
      <td colspan="6" class="text-center">No programmes available</td>
    </tr>
    <tr>
      <th scope="row" class="text-center">Roger Moore</th>
      <td colspan="2" class="text-center"><?=$movies[1]->title?></td>
      <td colspan="2"></td>
      <td colspan="2"></td>
    </tr>
     <tr>
      <th scope="row" class="text-center">Timothy Dalton</th>
      <td colspan="6" class="text-center">No programmes available</td>
    </tr>
    <tr>
      <th scope="row" class="text-center">Pierce Brosnan</th>
      <td colspan="2" class="text-center"><?=$movies[2]->title?></td>
      <td colspan="2"></td>
      <td colspan="2"></td>
    </tr>
    <tr>
      <th scope="row" class="text-center">Daniel Craig</th>
      <td colspan="2"></td>
      <td colspan="2"></td>
      <td colspan="2" class="text-center"><?=$movies[3]->title?></td>
    </tr>
    
  </tbody>
</table>
        

        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    </body>
</html>

