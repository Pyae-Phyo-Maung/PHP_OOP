<?php include('views/partials/header.php'); ?>

<h2>USER DATA</h2>

    <table>
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Value</th>     
      </tr>
      <?php foreach($manyrole as $role) : ?>
        <tr>
          <?php foreach($role as $key=>$value) : ?>
            <td><?= $value?></td>
          <?php endforeach; ?>
        </tr>
      <?php endforeach; ?> 
    </table>

  <section class="section-form">
    <h2>Submit Form</h2>
    <form action="/names" method="post">
      <label for="name">Name</label>
      <input type="text" name="name" id="name">
        <label for="value">Value</label>
        <input type="number" name="value" id="value">
      <input type="submit" value="Submit">
    </form>
  </section>
<?php include("views/partials/footer.php"); ?>