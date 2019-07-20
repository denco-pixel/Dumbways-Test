<?php
include "connection.php";
$update = $data->fetch_array();
$city = $conn->query('select * from cities');
?>
<html>

<head>
    <title>No. 7 - Update Biodata - Dumbways test</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <style>
        .page {
            margin-top: 20px;
            padding: 24px;
        }

        .mb-30 {
            margin-bottom: 30px;
        }

        .mt-30 {
            margin-top: 30px;
        }

        select {
            max-width: 250px;
        }
    </style>
</head>

<body>
    <div class="page">
        <div class="container">
            <div class="row mb-30">
                <div class="col-6">
                    <label class="form-label">
                        Nama Lengkap
                    </label>
                    <input type="text" class="form-control" name="namalengkap" value="<?php echo  $update['full_name'] ?>" />
                </div>
            </div>

            <div class="row mb-30">
                <div class="col-12">
                    <label class="form-label">
                        Tempat Lahir
                    </label>
                    <select class="form-control" name="tempat_lahir">
                        <?php while ($row = $city->fetch_assoc()) { ?>
                            <?php if ($row['id'] == $update['place_of_birth_id']) { ?>
                                <option value="<?php echo $row['id'] ?>" selected><?php echo $row['name'] ?></option>
                            <?php } else { ?>
                                <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
                            <?php } ?>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="row mb-30">
                <div class="col-3">
                    <label class="form-label">
                        Tanggal Lahir
                    </label>
                    <input type="text" class="form-control" placeholder="mmmm dd,yyyy" name="tanggal_lahir" value="<?php echo  $update['date_of_birth'] ?>" />
                </div>
            </div>

            <div class="row mb-30">
                <div class="col-3">
                    <label class="form-label">
                        No. HP
                    </label>
                    <input type="text" class="form-control" value="<?php echo  $update['phone_number'] ?>"/>
                </div>
            </div>


            <div class="row mb-30">
                <div class="col-12">
                    <label class="form-label">
                        Alamat
                    </label>
                    <textarea type="text" class="form-control" name="alamat" style="height: 125px;"><?php echo  $update['address'] ?></textarea>
                </div>
            </div>


            <div class="row mb-30">
                <div class="col-12">
                    <label class="form-label">
                        Pendidikan Terakhir
                    </label>
                    <select class="form-control">
                        <option value="">Select</option>
                        <option value="sd">SD</option>
                        <option value="smp">SMP</option>
                        <option value="slta">SLTA</option>
                        <option value="s1">S1</option>
                    </select>
                </div>
            </div>

            <div class="row mt-30">
                <div class="col-12">
                    <label class="form-label">
                        Agama
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input id="islam" name="agama" type="radio" value="Islam" class="" checked>
                    <label class="form-label" for="islam">Islam</label>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input id="kristen" name="agama" type="radio" value="Islam" class="">
                    <label class="form-label" for="kristen">Kristen</label>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input id="katolik" name="agama" type="radio" value="Islam" class="">
                    <label class="form-label" for="katolik">Katolik</label>
                </div>
            </div>


            <div class="row mt-30">
                <div class="col-12">
                    <label class="form-label">
                        Hobi
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input id="renang" name="hobi" type="checkbox" value="Renang" class="">
                    <label class="form-label" for="renang">Renang</label>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input id="mancing" name="hobi" type="checkbox" value="mancing" class="">
                    <label class="form-label" for="mancing">Mancing</label>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input id="game" name="hobi" type="checkbox" value="game" class="">
                    <label class="form-label" for="game">Game</label>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input id="gibah" name="hobi" type="checkbox" value="gibah" class="">
                    <label class="form-label" for="gibah">Gibah</label>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input id="programming" name="hobi" type="checkbox" value="programming" class="">
                    <label class="form-label" for="programming">Programming</label>
                </div>
            </div>

            <div class="row mt-30">
                <div class="col-6">
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="submit">Edit label</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>