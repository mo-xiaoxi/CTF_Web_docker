<div>
    <h3>My transations</h3>
</div>
<div>
<?php
self::draw_array($trans, 4);
?>
</div>

<div>
    <h3>Profile</h3>
</div>
<div>
    <form action="" method="post" enctype="multipart/form-data" >
        <div class="form-group">
            <label for="inputUsername">Username</label>
            <input type="text" class="form-control" id="inputUsername" value="<?=$this->user->username?>" readonly>
        </div>

        <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Enter if you want to change">
        </div>

        <div class="form-group">
            <label for="inputHashalgo">Password Hash</label>
            <select class="form-control" id="inputHashalgo" name="hash_algo">
                <option value="md5" <?=$this->user->hash_algo == "md5" ? "selected":""?>>MD5</option>
                <option value="sha1"<?=$this->user->hash_algo == "sha1" ? "selected":""?>>SHA1</option>
                <option value="sha256"<?=$this->user->hash_algo == "sha256" ? "selected":""?>>SHA256</option>
                <option value="sha512"<?=$this->user->hash_algo == "sha512" ? "selected":""?>>SHA512</option>
            </select>
        </div>

        <div class="form-group">
            <label for="inputPermission">Permission</label>
            <input class="form-control" id="inputPermission" value="<?=$this->user->perm == 2 ? "Admin" : "User"?>" readonly>
        </div>

        <div class="form-group">
            <label for="inputCash">Cash</label>
            <input type="text" class="form-control" id="inputCash" value="<?=$this->user->cash?>" readonly>
        </div>

        <div class="form-group">
            <label for="inputInfo">Info</label>
            <textarea name="info" class="form-control" id="inputInfo"><?=$this->user->info?></textarea>
        </div>

        <div class="form-group">
            <label for="inputAvatar">Avatar</label><br>
            <input type="file" id="inputAvatar" name="avatar">
            <?php
                if (!is_null($this->user->avatar)) {
                    ?>
                <div class="row">
                    <div class="col-md-4">
                        <img class="img-fluid" id="profileImg" src="<?=$this->user->avatar?>"/>
                    </div>
                </div>
            <?php
                }
            ?>
        </div>

        <div class="form-group">
            <input type="submit" value="Update">
        </div>
    </form>
</div>

