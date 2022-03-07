Bài Tập 2:
Mô tả yêu cầu:
Câu 1: Hiển thị datatable từ DOM (từ trang web html)
Câu 2: Hiển thị datatable từ file javascript (tạo dữ liệu bằng mockapi)
Câu 3: Hiển thị datatable từ server PHP Mysql bằng Ajax (tạo table và thêm data giả khoảng 2000 dòng để demo)
Hướng dẫn thao tác:
Câu 1:
- Khi click vào cau1.html, trang web sẽ chạy các dữ liệu mẫu vào datatable với lệnh script được ghi trong trang web
- Có thể search bằng thanh search hoặc qua trang bằng thanh phân trang được cung cấp sẵn bởi thư viện Datatable
- Có thể tùy chỉnh hiển thị số lượng dữ liệu muốn xem ở thanh Show entries ở bên trái trên cùng của trang web
- Khi click vào 1 dòng trên datatable, sẽ có một event alert người dùng là người dùng đã click vào dữ liệu đó
Câu 2:
- Cũng chạy như câu 1, tuy nhiên nguồn dữ liệu sử dụng là file data.txt được tạo ra từ website Mockapi.io
- Các chức năng khi thao tác datatable vẫn được giữ nguyên như câu 1
Câu 3:
- Mở XAMPP hoặc WAMPP mà người dùng đang sử dụng. Thực hiện mở PHPMyAdmin từ XAMPP, sau đó tiến hành import file database được cung cấp.
cung cấp vào PHPMyAdmin
- Sau khi import databaase thành công, khi click cau3.html, trang web sẽ lấy các dữ liệu từ database được import ở PHPMyAdmin và hiển thị
các dữ liệu đó trong datatable.
- Các chức năng khi thao tác datatable vẫn được giữ nguyên như câu 1