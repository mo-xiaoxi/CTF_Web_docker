<form action="" method="post">
    <div class="form-group">
        <label for="inputUsername">Username</label>
        <input type="text" class="form-control" name="username" id="inputUsername">
    </div>

    <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control" name="password" id="inputPassword">
    </div>

    <div class="form-group">
        <label for="inputHashalgo">Hash Algorithm</label>
        <select class="form-control" id="inputHashalgo" name="hash_algo">
            <option value="md5">MD5</option>
            <option value="sha1" selected>SHA1</option>
            <option value="sha256">SHA256</option>
            <option value="sha512">SHA512</option>
        </select>
    </div>

    <div class="form-group">
        <input type="submit" name="submit" value="Register" >
    </div>
</form>

