<?php require_once("module/header.php") ?>
  <ul id="list">
    <!-- loop -->
    <?PHP for($i = 0; $i < 10; $i++): ?>
    <li>
      <div id="thumbnail">IW4C</div>
      <table>
        <tr>
          <th>No.</th>
          <td>01</td>
        </tr>
        <tr>
          <th>主題</th>
          <td>ログインフォーム作成</td>
        </tr>
        <tr>
          <th>科目記号</th>
          <td>IW4C</td>
        </tr>
        <tr>
          <th>科目担当</th>
          <td>熊谷先生</td>
        </tr>
        <tr>
          <th>提出日</th>
          <td>2014/04/30</td>
        </tr>
        <tr>
          <th>再提出日</th>
          <td></td>
        </tr>
        <tr>
          <th>メモ</th>
          <td></td>
        </tr>
      </table>
    </li>
    <?PHP endfor; ?>
    <!-- /loop -->
  </ul>
<?php require_once("module/footer.php") ?>
