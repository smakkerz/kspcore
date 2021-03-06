{% extends "tpl/tpl1.php" %}

        {% block breadcrumb %}
            <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="..">Home</a> 
                    <i class="icon-angle-right"></i>
                </li>
                <li><a href="#">Base</a></li>
            </ul>
        {% endblock  breadcrumb %}

        {% block page %}
				<div id="page" class="dashboard">
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="tabbable tabbable-custom boxless">
                                <ul class="nav nav-tabs">
                                   <li class="active"><a href="#tabs-1" data-toggle="tab">Data Tabungan</a></li>
                                   <li><a href="#tabs-2" data-toggle="tab" id="tab2x">Tabungan Baru</a></li>
                                   <li><a href="#tabs-3" data-toggle="tab">Search FO</a></li>
                                   <li><a href="#tabs-4" data-toggle="tab">Search Nasabah</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tabs-1">
                                        <div class="widget box blue">
                                            <div class="widget-title">
                                               <h4><i class="icon-reorder"></i> Data Tabungan</h4>
                                            </div>
                                            <div id="table_datatabungan">

{% set option = [{'nama': 'Nama Nasabah'}, {'nomor_rekening': 'Nomor Rekening'}] %}
{% set tombol = '<button id="addtabungan" class="fg-button ui-state-default ui-corner-all"><img src="'~ assets_path ~'/images/addicon.png" />Tambah Tabungan</button>' %}

{%
set tabel_head = [
    ['', '5%', 'No'],
    ['nomor_nasabah', '7%', 'Nomor Rekening'],
    ['', '20%', 'Nama Nasabah'],
    ['', '25%', 'Alamat'],
    ['', '10%', 'Kota'],
    ['', '10%', 'Jenis Tab'],
    ['', '5%', 'Manage'],
    ['nasabah_id', '5%', 'ID'],
]
%}

{% embed "app/filter_layout.php" %}{% endembed %}
{% embed "app/table_layout.php" %}{% endembed %}
{% embed "app/paging_layout.php" %}{% endembed %}

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabs-2">
                                        <div class="widget-body form">
                                            <form action="#" id="form_tab" class="form-horizontal">
                                               <div class="control-group">
                                                  <label class="control-label">Tanggal dibuka<span class="required">*</span></label>
                                                  <div class="controls">
                                                     <input name="tgl_dibuka" type="text" size="16" class="m-wrap m-ctrl-medium date-picker" readonly>
                                                  </div>
                                               </div>
                                                <div class="control-group">
                                                    <label class="control-label">No. Nasabah<span class="required">*</span></label>
                                                    <div class="controls">
                                                        <input name="nomor_rekening" type="text" class="input-large" readonly>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">FO<span class="required">*</span></label>
                                                    <div class="controls">
                                                        <input name="nomor_fo" type="hidden" class="input-large">
                                                        <input name="nomor_foname" type="text" class="input-large"> <a class="btn searchfo"><i class="icon-search"></i></a>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Cari Nama Nasabah<span class="required">*</span></label>
                                                    <div class="controls">
                                                        <input name="nama" type="text" class="input-large">
                                                        <input name="nomor_nasabah" type="hidden" class="input-large"> <a class="btn searchnasabah"><i class="icon-search"></i></a>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label"></label>
                                                    <div class="controls">
                                                        <input type="text" name="alamat" disabled="" placeholder="Alamat..." class="input-xlarge">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label"></label>
                                                    <div class="controls">
                                                        <input type="text" name="kota" disabled="" placeholder="Kota..." class="input-large">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Nama Produk</label>
                                                    <div class="controls">
                                                        <select class="input-xlarge" name="jenis_simpanan"></select>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Sumber dana</label>
                                                    <div class="controls">
                                                        <input name="sumber_dana" type="text" class="input-large">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Tujuan pemb. rekening</label>
                                                    <div class="controls">
                                                        <input name="tujuan_pembukaan" type="text" class="input-large">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Zakat</label>
                                                    <div class="controls">
                                                        <select class="input-small" name="zakat">
                                                            <option value="">-------------</option>
                                                            <option value="YA">YA</option>
                                                            <option value="TIDAK">TIDAK</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Administrasi</label>
                                                    <div class="controls">
                                                        <select class="input-small" name="administrasi">
                                                            <option value="">------</option>
                                                            <option value="YA">YA</option>
                                                            <option value="TIDAK">TIDAK</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">PPH</label>
                                                    <div class="controls">
                                                        <select class="input-small" name="pph">
                                                            <option value="">------</option>
                                                            <option value="YA">YA</option>
                                                            <option value="TIDAK">TIDAK</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Di Jaminkan</label>
                                                    <div class="controls">
                                                        <select class="input-small" name="dijaminkan">
                                                            <option value="TIDAK">TIDAK</option>
                                                            <option value="YA">YA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Blockir</label>
                                                    <div class="controls">
                                                        <select class="input-small" name="blockir">
                                                            <option value="Unblock">Unblock</option>
                                                            <option value="Block Debet">Block Debet</option>
                                                            <option value="Block Kredit">Block Kredit</option>
                                                            <option value="Block Debet-Kredit">Block Debet-Kredit</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Status</label>
                                                    <div class="controls">
                                                        <select class="input-small" name="status">
                                                            <option value="0">Aktif</option>
                                                            <option value="1">Tutup/lunas</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-actions">
                                                  <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabs-3">
                                        <div class="widget box blue">
                                            <div class="widget-title">
                                               <h4><i class="icon-reorder"></i> Data FO</h4>
                                            </div>
                                            <div id="table_pegawai">

{% set option = [{'nama_pegawai': 'Nama Pegawai'}, {"nip": "NIP"}, {"nama_jabatan": "Jabatan"}, {'nama_panggilan': 'Panggilan'}] %}
{% set tombol = false %}

{%
set tabel_head = [
    ['', '5%', 'No', '1', ''],
    ['nama_pegawai', '10%', 'Nama', '1', ''],
    ['nama_panggilan', '7%', 'Panggilan', '1', ''],
    ['', '20%', 'Alamat', '1', ''],
    ['nama_jabatan', '10%', 'Jabatan', '1', ''],
    ['', '7%', 'Manage', '1', ''],
    ['pegawai_id', '5%', 'ID', '1', ''],
]
%}

{% embed "app/filter_layout.php" %}{% endembed %}
{% embed "app/table_layout.php" %}{% endembed %}
{% embed "app/paging_layout.php" %}{% endembed %}

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabs-4">
                                        <div class="widget box blue">
                                            <div class="widget-title">
                                               <h4><i class="icon-reorder"></i> Nasabah</h4>
                                            </div>
                                            <div id="table_datanasabah">

{% set option = [{'nama': 'Nama Nasabah'}, {"nomor_nasabah": "Nomor Nasabah"}] %}
{% set tombol = false %}

{%
set tabel_head = [
    ['', '5%', 'No'],
    ['nomor_nasabah', '12%', 'Nomor Nasabah'],
    ['', '20%', 'Nama Nasabah'],
    ['', '25%', 'Alamat'],
    ['', '10%', 'Kota'],
    ['', '5%', 'Manage'],
    ['nasabah_id', '5%', 'ID'],
]
%}

{% embed "app/filter_layout.php" %}{% endembed %}
{% embed "app/table_layout.php" %}{% endembed %}
{% embed "app/paging_layout.php" %}{% endembed %}

                                            </div>
                                        </div>
                                    </div>
                                </div>
						</div>
					</div>
				</div>
			</div>	
        {% endblock page %}

{% block footer %}
    {% embed "app/footer.php" %}{% endembed %}
    {% block footer_dialog %}
    <!-- Dialog Area -->
    <div id="dialog-login-edit">
        <form id="form_login_edit" method="post">
        <fieldset>
		    <div class="fm-req">
		      <label for="kode">Username :</label>
		      <input class="inp" name="username"  type="text" maxlength="20"/>
		    </div>
		    <div class="fm-req">
		      <label for="nama">Password :</label>
		      <input class="inp" name="password" type="password" maxlength="20" />
		    </div>
		    </fieldset>
		    <p class="infonya"></p>
        </form>
    </div>
    <div id="dialog-login-hapus">
        <form id="form_login_hapus" method="post">
        <fieldset>
		    <div class="fm-req">
		      <label for="kode">Username :</label>
		      <input class="inp" name="username"  type="text" maxlength="20"/>
		    </div>
		    <div class="fm-req">
		      <label for="nama">Password :</label>
		      <input class="inp" name="password" type="password" maxlength="20" />
		    </div>
		    </fieldset>
		    <p class="infonya"></p>
        </form>
    </div>
    <div id="dialog-hapus">
      <br /><img src="assets/images/question.png">&nbsp;Anda yakin <span class="phps"></span> akan dihapus ?
    </div>
    {% endblock footer_dialog %}
{% endblock footer %}
