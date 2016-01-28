<?php
require 'main_conn.php';
if (empty($_GET['q'])) {
  require 'inbox_init.php';
} else {
  $q = $_GET['q'];
  $search_results_by_q = $main->query("SELECT * FROM mail WHERE (name LIKE " . htmlspecialchars_decode("&quot;") . "%$q%" . htmlspecialchars_decode("&quot;") . ") OR (email LIKE " . htmlspecialchars_decode("&quot;") . "%$q%" . htmlspecialchars_decode("&quot;") . ") OR (message LIKE " . htmlspecialchars_decode("&quot;") . "%$q%" . htmlspecialchars_decode("&quot;") . ") OR (ip LIKE " . htmlspecialchars_decode("&quot;") . "%$q%" . htmlspecialchars_decode("&quot;") . ") ORDER BY id DESC");
  if ($search_results_by_q->num_rows == 0) { ?>
    <p style="font-style:italic;font-size:smaller;">
      No results matched your query
    </p>
  <?php } else { ?>
    <p style="font-style:italic;font-size:smaller;">
      <?php echo $search_results_by_q->num_rows; ?> result(s) for &quot;<?php echo $_GET['q']; ?>&quot;
    </p>
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
          <?php while ($mail_result = $search_results_by_q->fetch_assoc()) { ?>
            <tr>
              <td>
                <?php echo $mail_result['name']; ?> &lt;<?php echo $mail_result['email']; ?>&gt;
              </td>
              <td>
                <?php if (strlen($mail_result['message']) <= 50) {
                  echo $mail_result['message'];
                } else {
                  for ($i = 0; $i < 50; $i++) {
                    echo $mail_result['message'][$i];
                  }
                  echo " ... ";
                } ?>
              </td>
              <td>
                <?php echo $mail_result['ip']; ?>
              </td>
              <td>
                <a class="button" href="readmail.php?id=<?php echo $mail_result['id']; ?>"><span class="icon fa-file-text-o"></span> Read</a>
              </td>
              <td>
                <a class="button" href="reply.php?id=<?php echo $mail_result['id']; ?>"><span class="icon fa-reply"></span> Reply</a>
              </td>
              <td>
                <a class="button" href="javascript:void(0)" onclick="deleteMailByIndex(<?php echo $mail_result['id']; ?>)"><span class="icon fa-trash"></span> Delete</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  <?php }
} ?>
