<?php
require 'main_conn.php';
$inbox = $main->query("SELECT * FROM mail");
if ($inbox->num_rows == 0) { ?>
  <p style="font-style:italic;font-size:small;">
    Your inbox is currently empty.
  </p>
<?php } else { ?>
  <h3>Unread</h3>
  <?php
  $get_unread = $main->query("SELECT * FROM mail WHERE status = 'unread' ORDER BY id DESC;");
  if ($get_unread->num_rows == 0) { ?>
    <p style="font-size:small;font-style:italic;">
      You have no unread mail.
    </p>
  <?php } else {
    ?>
    <div class="table-wrapper">
      <table>
        <thead>
          <tr>
            <th>
              From
            </th>
            <th>
              Summary
            </th>
            <th>
              IP
            </th>
            <th colspan="3">
              Actions
            </th>
          </tr>
        </thead>
        <tbody>
    <?php while ($unread_mail = $get_unread->fetch_assoc()) { ?>
          <tr>
            <td>
              <?php echo $unread_mail['name']; ?> &lt;<?php echo $unread_mail['email']; ?>&gt;
            </td>
            <td>
              <?php
              if (strlen($unread_mail['message']) <= 50) {
                echo $unread_mail['message'];
              } else {
                $summary = "";
                $i = 0;
                for ($i = 0; $i < 50; $i++) {
                  $summary .= $unread_mail['message'][$i];
                }
                echo $summary;
                echo " ... ";
              }
              ?>
            </td>
            <td>
              <?php echo $unread_mail['ip']; ?>
            </td>
            <td>
              <a class="button" href="readmail.php?id=<?php echo $unread_mail['id']; ?>"><span class="icon fa-file-text-o"></span> Read</a>
            </td>
            <td>
              <a class="button" href="reply.php?id=<?php echo $unread_mail['id']; ?>"><span class="icon fa-reply"></span> Reply</a>
            </td>
            <td>
              <a class="button" href="javascript:void(0)" onclick="deleteMailByIndex(<?php echo $unread_mail['id']; ?>)"><span class="icon fa-trash"></span> Delete</a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <?php
  }
  ?>
  <h3>Read</h3>
  <?php
  $get_read = $main->query("SELECT * FROM mail WHERE status = 'read' ORDER BY id DESC;");
  if ($get_read->num_rows == 0) { ?>
    <p style="font-size:small;font-style:italic;">
      You have no read mail.
    </p>
  <?php } else {
    ?>
    <div class="table-wrapper">
      <table>
        <thead>
          <tr>
            <th>
              From
            </th>
            <th>
              Summary
            </th>
            <th>
              IP
            </th>
            <th colspan="3">
              Actions
            </th>
          </tr>
        </thead>
        <tbody>
          <?php while ($already_read_mail = $get_read->fetch_assoc()) { ?>
            <tr>
              <td>
                <?php echo $already_read_mail['name']; ?> &lt;<?php echo $already_read_mail['email']; ?>&gt;
              </td>
              <td>
                <?php if (strlen($already_read_mail['message']) <= 50) {
                  echo $already_read_mail['message'];
                } else {
                  for ($i = 0; $i < 50; $i++) {
                    echo $already_read_mail['message'][$i];
                  }
                  echo " ... ";
                } ?>
              </td>
              <td>
                <?php echo $already_read_mail['ip']; ?>
              </td>
              <td>
                <a class="button" href="readmail.php?id=<?php echo $already_read_mail['id']; ?>"><span class="icon fa-file-text-o"></span> Read</a>
              </td>
              <td>
                <a class="button" href="reply.php?id=<?php echo $already_read_mail['id']; ?>"><span class="icon fa-reply"></span> Reply</a>
              </td>
              <td>
                <a class="button" href="javascript:void(0)" onclick="deleteMailByIndex(<?php echo $already_read_mail['id']; ?>)"><span class="icon fa-trash"></span> Delete</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <?php
  }
  ?>
<?php }
?>
