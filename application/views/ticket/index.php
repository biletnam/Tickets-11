<!-- views/ticket/list.php -->
<table>
  <tr>
    <th>Tytuł</th>
    <th>Treść</th>
    <th>Akcja</th>
  </tr>
  <?php
    foreach($this->tickets_list as $item)
    {
      echo '<tr class="'.text::alternate('row1','row2') .'">';
      echo "<td>".$item->title."</td>";
      echo "<td>".$item->body."</td>";
      echo "<td>".html::anchor('ticket/'.$item->id, 'edit')."</td>";
      echo "</tr>";
    }
  ?>
</table>