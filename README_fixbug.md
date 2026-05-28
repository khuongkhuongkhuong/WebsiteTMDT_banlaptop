# Các phần đã sửa và cải thiện trong hệ thống Website Thương Mại Điện Tử

## 1. Cải thiện chức năng đặt hàng và thanh toán (Checkout)

### Vấn đề trước khi sửa

Ban đầu hệ thống nhận trực tiếp các dữ liệu như:

- `id_user`
- `total_price`
- `price`

từ phía frontend gửi lên backend. Điều này gây ra rủi ro bảo mật vì người dùng có thể sửa request để thay đổi giá đơn hàng.

### Nội dung đã sửa

- Backend tự lấy thông tin user thông qua token đăng nhập (`Auth::id()`).
- Backend tự lấy giá sản phẩm từ database.
- Backend tự tính tổng tiền đơn hàng.
- Backend tự tính phí vận chuyển.
- Thêm validate dữ liệu đầu vào.
- Kiểm tra tồn kho trước khi tạo đơn hàng.
- Sử dụng `DB::transaction()` để đảm bảo dữ liệu nhất quán khi tạo đơn.

### Kết quả

- Tăng tính bảo mật cho hệ thống.
- Tránh tình trạng sửa giá sản phẩm hoặc tổng tiền đơn hàng.
- Đảm bảo đơn hàng chỉ được tạo khi dữ liệu hợp lệ.

---

## 2. Cải thiện quản lý tồn kho và trạng thái đơn hàng

### Vấn đề trước khi sửa

Hệ thống có nguy cơ:

- Trừ tồn kho nhiều lần.
- Trừ kho sai thời điểm.
- Hoàn thành đơn hàng dù số lượng sản phẩm không đủ.

### Nội dung đã sửa

- Chỉ trừ tồn kho khi admin chuyển trạng thái đơn hàng sang “Hoàn thành”.
- Kiểm tra số lượng tồn kho trước khi hoàn thành đơn.
- Không cho phép cập nhật lại đơn đã hoàn thành.
- Không cho phép cập nhật đơn đã hủy.
- Sử dụng transaction và `lockForUpdate()` để tránh lỗi race condition.

### Kết quả

- Quản lý tồn kho chính xác hơn.
- Tránh lỗi âm kho hoặc trừ kho nhiều lần.
- Đảm bảo tính nhất quán dữ liệu đơn hàng.

---

## 3. Sửa lỗi chức năng tìm kiếm sản phẩm

### Vấn đề trước khi sửa

Câu truy vấn tìm kiếm sử dụng `orWhere()` chưa đúng logic, khiến:

- Các sản phẩm đã bị ẩn (`status = 0`) vẫn có thể xuất hiện trong kết quả tìm kiếm.

### Nội dung đã sửa

- Gom điều kiện tìm kiếm vào `where(function(){ ... })`.
- Chỉ tìm kiếm trong các sản phẩm đang hoạt động (`status > 0`).

### Kết quả

- Kết quả tìm kiếm chính xác hơn.
- Không hiển thị sản phẩm bị ẩn hoặc ngừng kinh doanh.

---

## 4. Cải thiện chức năng hủy đơn hàng

### Vấn đề trước khi sửa

Người dùng có thể:

- Hủy đơn không thuộc tài khoản của mình.
- Hủy đơn đã hoàn thành.
- Hủy nhiều lần cùng một đơn.

### Nội dung đã sửa

- Chỉ cho phép user hủy đơn của chính mình.
- Không cho phép hủy đơn đã hoàn thành.
- Không cho phép hủy lại đơn đã hủy.
- Bổ sung xử lý exception và response lỗi rõ ràng.

### Kết quả

- Tăng tính bảo mật và tính chính xác của dữ liệu đơn hàng.
- Tránh các thao tác không hợp lệ trên hệ thống.

---

## 5. Sửa lỗi webhook thanh toán

### Vấn đề trước khi sửa

Code sử dụng:

```php
$request->content
```

gây lỗi do `content` là thuộc tính protected trong Laravel Request.

### Nội dung đã sửa

Thay bằng:

```php
$request->input('content')
```

hoặc:

```php
$request->getContent()
```

### Kết quả

- Webhook xử lý dữ liệu thanh toán ổn định hơn.
- Tránh lỗi PHP visibility khi nhận callback thanh toán.

---

# Tổng kết

Sau khi chỉnh sửa, hệ thống đã được cải thiện về:

- Bảo mật dữ liệu đơn hàng.
- Tính chính xác của thanh toán và tồn kho.
- Tính ổn định của chức năng tìm kiếm và quản lý đơn hàng.
- Khả năng xử lý lỗi và đảm bảo dữ liệu nhất quán.

Các phần chỉnh sửa tập trung chủ yếu vào:

- Checkout / Payment
- Order Management
- Inventory Management
- Product Search
- Security & Validation
