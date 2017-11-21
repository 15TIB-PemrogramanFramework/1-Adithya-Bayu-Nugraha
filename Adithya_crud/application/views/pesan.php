<label>Kategori</label>
        <select class="form-control select2" name="id_kategori" style="width: 100%;">
            <?php foreach ($kategori as $key => $value) { ?>
            <option value="<?php echo $value->id_kategori;?>"><?php echo $value->nama_kategori ;?></option>
            <?php } ?>
        </select>