<section id="wanttobuy">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">WANT TO BUY</h2>
                    <h3 class="section-subheading text-muted">Tell us about your info and what you want to buy to help us support your demand :)</h3>
                </div>
            </div>

			<div class="validation-error">
				<?php echo validation_errors(); ?>
			</div>

			<div class="form-style-5">
				<form action="<?php echo base_url(); ?>buyer/index" method="POST">
				<fieldset>
				<legend><span class="number">1</span>Thông tin hàng muốn mua</legend>
				<label>Tên sản phẩm</label>
				<input type="text" name="productName" placeholder="VD: Xiaomi Note 3,HP Elitebook 8470w* ...">
				<label>Link mặt hàng</label>
				<input type="url" name="productLink" placeholder="Ví dụ: http://ebay.com/abcxyz...*">
				<label for="productNation">Mua ở quốc gia</label>
				<select name="productNation" id="inpu_7" class="medium gfield_select" tabindex="1">
					<option value="Japan">Nhật Bản</option>
					<option value="Korea">Hàn Quốc</option>
					<option value="France">Pháp</option>
					<option value="America">Mỹ</option>
					<option value="Hongkong">Hồng Kông</option>
					<option value="Thailand">Thái Lan</option>
					<option value="Australia">Úc</option>
					<option value="England">Anh</option>
					<option value="Singapore">Singapore</option>
					<option value="Germany">Đức</option>
					<option value="Italy">Ý</option>
					<option value="Spain">Tây Ban Nha</option>
					<option value="Russia">Nga</option>
					<option value="Canada">Canada</option>
				</select>
				<label>Số lượng</label>
				<input type="number" name="quantity" placeholder="Điền số lượng*">
				<label for="currencyUnit">Đơn vị tiền</label>
				<select name="currencyUnit" id="input_9" class="medium gfield_select" tabindex="9">
				<option value="JPY">JPY</option>
				<option value="USD">USD</option>
				<option value="EUR">EUR</option>
				<option value="CAD">CAD</option>
				<option value="GBP">GBP</option>
				<option value="KRW">KRW</option>
				<option value="RUB">RUB</option>
				<option value="SGD">SGD</option>
				<option value="THB">THB</option>
				<option value="HKD">HKD</option>
				<option value="AUD">AUD</option>
				</select>
				<label>Thành tiền</label>
				<h6 class="subheading">Nhập tiền ngoại tệ. Vd: Nếu là 20 EUR thì nhập số "20". Nếu là 3000 JPY thì nhập số "3000". PickShipper sẽ tự động quy đổi sang VND khi có người đồng ý mua hộ bạn. Tiền Hàng PHẢI BAO GỒM thuế tiêu thụ tại quốc gia bán. Dấu ngăn cách thập phân là DẤU CHẤM “.” và dấu ngăn cách phần ngàn là DẤU PHẤY “,”</h7>
				<input type="number" name="field3" placeholder="...">
				<label>Tiền công (VND)</label>
				<h6 class="subheading">Tiền Công luôn tính bằng tiền Việt (VND). Tiền Công bao gồm phí ship nội địa, công mua và mang về, chi phí khác</h6>
				<input type="number" name="field4" placeholder="...">
				<fieldset>
					<legend><span class="number">2</span>Thông tin về bạn</legend>
					<label>Họ & Tên</label>
					<input type="text" name="buyerName" placeholder="...">
					<label>Email</label>
					<input type="email" name="buyerEmail" placeholder="example@gmail.com*">
					<label>Số điện thoại</label>
					<input type="text" name="buyerPhoneNumber" placeholder="0919 991 199*">
					<label>Link Mạng xã hội</label>
					<input type="url" name="buyerScofial" placeholder="fb.com/iG">
					<textarea name="buyerMessage" placeholder="Lời nhắn"></textarea>
				</fieldset>
					<input type="submit" value="GỬI YÊU CẦU" />
				</form>
			</div>
    </section>