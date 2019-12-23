<div class="container">
<div class="table-responsive">
<?php
self::draw_array($items, 3);
?>
</div>
</div>

<?php
if ($this->is_login()) {
    ?>
<h3>Let's buy some</h3>
<div>
    <form action="?action=bank&op=buy" method="post" enctype="multipart/form-data" >
        <div class="form-group">
            <label for="inputUsername">Stock Name</label>
            <input type="text" class="form-control" name="name">
        </div>

        <div class="form-group">
            <label >Amount</label>
            <input type="text" class="form-control" name="amount">
        </div>
        <div class="form-group">
            <label for="inputInfo">Note</label>
            <textarea name="note" class="form-control" id="inputInfo"></textarea>
        </div>

        <div class="form-group">
            <label for="inputHashalgo">Hash Algorithm of Cerfificate</label>
            <select class="form-control" id="inputHashalgo" name="hash">
                <option value="md5">MD5</option>
                <option value="sha1" selected>SHA1</option>
                <option value="sha256">SHA256</option>
                <option value="sha512">SHA512</option>
            </select>
        </div>

        <div class="form-group">
            <input type="submit" value="buy">
        </div>
    </form>
</div>
<?php
} ?>
