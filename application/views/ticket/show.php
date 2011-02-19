<h3 class="title">Szczegóły zgłoszenia</h3>

<?php foreach($this->ticket as $item) { ?>

  <p><strong>Tytuł</strong></p>
  <p><?php echo $item->title; ?></p>
  <p><strong>Treść</strong></p>
  <p><?php echo $item->body; ?></p>

<?php } ?>
<!--  // TODO bez pętli, przekazać w kontrolerze wyszczegółowione kolumny -->
<br />
<div id="comments">
  <div id="comments-list"">
    <h3 class="title">Komentarze</h3>
    <?php foreach($this->comments as $comment) { ?>
    <p><?php echo $comment->body ?></p>
    <?php } ?>
  </div>
  <div id="comments-form">
    <?php
      print form::open('comment/create');
      print form::textarea('body', NULL, 'rows="20" cols="50"');
      print "<br />";
      print form::hidden('ticket_id', $item->id);
      print form::submit('submit', 'Dodaj komentarz');
    ?>
  </div>
</div>