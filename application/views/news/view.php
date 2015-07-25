<?php
#views/news/view.php
$this->load->view( $this->config->item('theme') . 'header'); 
?>

<?php
echo '<h2>'.$news_item['title'].'</h2>';
echo '<div class="container">';
echo $news_item['text'];
echo '</div>';

$this->load->view( $this->config->item('theme') . 'footer');    

