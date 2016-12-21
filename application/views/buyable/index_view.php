
<section id="buyable" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">BUYABLE</h2>
                    <h3 class="section-subheading text-muted">Share your trip to us and things that you are able to buy :)</h3>
                </div>
            </div>

            <div class="validation-error">
				<?php echo validation_errors(); ?>
			</div>

			<div class="form-style-6">
				<form action="<?php echo base_url(); ?>buyable/index" method="POST">
				<fieldset>
				<legend><span class="number">1</span>Thông tin chuyến đi</legend>
				<label for="input_10">Đi từ*</label>
				<select name="flightFrom" id="input_10" class="medium gfield_select" tabindex="1">
					<option value="Nhật Bản">Nhật Bản</option>
					<option value="Hàn Quốc">Hàn Quốc</option>
					<option value="Pháp">Pháp</option>
					<option value="Mỹ">Mỹ</option>
					<option value="Hồng Kông">Hồng Kông</option>
					<option value="Thái Lan">Thái Lan</option>
					<option value="Úc">Úc</option>
					<option value="Anh">Anh</option>
					<option value="Singapore">Singapore</option>
					<option value="Đức">Đức</option>
					<option value="Ý">Ý</option>
					<option value="Tây Ban Nha">Tây Ban Nha</option>
					<option value="Nga">Nga</option>
					<option value="Canada">Canada</option>
				</select>
				<label>Đi đến*</label>
				<input type="text" name="flightTo" placeholder="Ho Chi Minh, Ha Noi, Lao cai ex..."></textarea>
				<label>Ngày đi*</label>
				<input type="date" name="flightDate" value="CHIA SẺ CHUYẾN ĐI" />
				<input type="submit" value="CHIA SẺ CHUYẾN ĐI" />
				</form>
			</div>