<?php
function method_discription() {
  $method_discription = array();
  // ページスラッグ取得 ==============================================
  if (!$method_discription) {
    $method_discription[0] = array(
      'name' => 'get_page_slug()',
      'argument' => '',
      'discription' => 'ページスラッグを取得するメソッドです。',
      'wrote_page' => 'method.php'
    );
  }else {
    $method_discription[] = array(
      'name' => 'get_page_slug()',
      'argument' => '',
      'discription' => 'ページスラッグを取得するメソッドです。',
      'wrote_page' => 'method.php'
    );
  }
  // 和暦取得 ========================================================
  $method_discription[] = array(
    'name' => 'get_wareki()',
    'argument' => '$year,$format,$gannen',
    'discription' => '西暦を渡すと和暦で返してくれるメソッドです。<br />第一引数：西暦入力(必須)<br />第二引数：フォーマットを指定。\'true\'を指定するとアルファベットの略称を返します。<br />第三引数：元年の表記を指定します。\'ture\'を指定すると１年→元年になります。',
    'wrote_page' => 'method.php'
  );
  // 使用しているテンプレートファイル名取得 =============================
  $method_discription[] = array(
    'name' => 'get_template_failename()',
    'argument' => '',
    'discription' => '使用しているテンプレートファイルの名前を取得します。',
    'wrote_page' => 'method.php'
  );

  return $method_discription;
}


// ページの追加
add_action( 'admin_menu', 'register_my_custom_menu_page' );
function register_my_custom_menu_page() {
  add_menu_page('methods', 'methods', 'manage_options', 'manual', 'add_manual_page', 'dashicons-editor-code', 1);
}

// ページの中身のHTML
function add_manual_page() {
  ?>
  <?php $discription = method_discription(); ?>
  <div id="method_discription">
    <div class="manual-contents">
      <h1>Method</h1>
      <p>テーマで使用できるメソッドです。</p>
    </div>
    <div class="discriptions">
      <table>
        <tbody>
          <?php
          foreach ($discription as $index => $value) { //3回繰り返し
            ?>
            <tr class="top-cell">
              <th>メソッド名</th>
              <th>
                <?php echo $value['name'] ?>
              </th>
            </tr>
            <tr>
              <td>引数</td>
              <td><?php echo $value['argument'] ?></td>
            </tr>
            <tr>
              <td>説明</td>
              <td><?php echo $value['discription'] ?></td>
            </tr>
            <tr>
              <td>記述ファイル名</td>
              <td><?php echo $value['wrote_page'] ?></td>
            </tr>
            <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <?php
}

?>
