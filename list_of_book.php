<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
	<title>My website</title>
    <link rel="stylesheet" href="css/style_duong.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/cover-box.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/logo.css">
</head>
<body>
    <!-- header -->
    <div class="header">
        <div class="header-left-section">
            <a href="index.html"><img class="header-logo" src="img/logo_DABM.png" alt="Logo"></a>
        </div>
        <div class="header-nav-links">
            <a href="index.html">Trang chủ</a>
            <a href="#">Cửa hàng</a>
            <a href="#">Giới thiệu</a>
            <a href="#">Liên hệ</a>
        </div>
        <div class="header-right-section">
            <a href="#"><img class="header-icon" src="img/icon_user.png" alt="Icon 1"></a>
            <a href="#"><img class="header-icon" src="img/icon_news.png" alt="Icon 2"></a>
            <a href="#"><img class="header-icon" src="img/icon_heart.png" alt="Icon 3"></a>
            <a href="#"><img class="header-icon" src="img/icon_cart.png" alt="Icon 4"></a>
        </div>
    </div>

    <div class="box">
        <img src="img/logo_DABM_3.png" alt="Home Icon" width="50px">
        <p class="box-text">Xem sách</p>
        <div>
            <a href="index.html">Cá nhân</a>
            <a href="list_of_book.html">> Quản lý sách</a>
        </div>
    </div>

    <!-- content -->
    <div class="content">
        <div class="side-box">
            <a href="#"><img class="side-box-avatar" src="img/icon_user.png" alt="User Avatar"></a>
            <br>
            <p style="font-family: 'Times New Roman', Times, serif; font-size: 20px; font-weight: bold; margin-bottom: 0; color: #B88E2F">Nguyễn Ngọc</p>
            <p style="font-family: Arial, sans-serif; font-size: 13px; margin-bottom: 0; color: #B88E2F">ID: 00000001</p>
            <p style="font-family: Arial, sans-serif; font-size: 13px; color: #B88E2F;">Employee</p>
            <a href="#"><img class="side-box-button" src="img/button_personal_info.png" alt="Button1"></a>
            <a href="#"><img class="side-box-button" src="img/button_book_management.png" alt="Button1"></a>
            <a href="employee_order.html"><img class="side-box-button" src="img/button_check_receipt.png" alt="Button1"></a>
            <a href="#"><img class="side-box-button" src="img/button_book_logistics.png" alt="Button1"></a>
        </div>
        <div class="content-box">
            <img class = "logo" src="img/logo_DABM.png", alt="Logo">
            <br>
            <div class = "main-container">
                <div class="search-container">
                    <div class="search-icons">
                        <div class="search-icon">
                            <img class="side-box-image" src="img/icon_search_emp.png" alt="Icon"/>
                        </div>
                        <input type="text" class="search-input" placeholder="Tìm kiếm sách">
                        <div class="filter-icon" onclick="handleFilterClick()">
                            <img class="side-box-image" src="img/icon_filter.png" alt="Icon"/>
                        </div>
                    </div>
                </div> 
                <div class ="button-container">
                    <button class="create-order-button" onclick="handleAddBook()">Nhập sách mới</button>
                </div>                 
            </div>       
            <div id="filter-box" class="filter-box">
                <ul>
                    <li>Số lượng còn lại tăng dần</li>
                    <li>Số lượng còn lại giảm dần</li>
                    <li>Giá tiền tăng dần</li>
                    <li>Giá tiền giảm dần</li>
                </ul>
            </div>
            <script>
                function handleFilterClick() {
                    // Add your filter action here
                    var filterBox = document.getElementById("filter-box");
                    var mouseX = event.clientX;
                    var mouseY = event.clientY;

                    filterBox.style.left = mouseX + "px";
                    filterBox.style.top = mouseY + "px";

                    filterBox.style.display = (filterBox.style.display === "block") ? "none" : "block";
                }
                
                document.addEventListener("click", function(event) {
                    var filterIcon = document.querySelector(".filter-icon");
                    if (event.target === filterIcon) {
                        toggleFilterBox(event);
                    } else {
                        document.getElementById("filter-box").style.display = "none";
                    }
                })
                function handleAddBook() {
                        window.location.href = 'add_new_book_.html';
                        alert("Nhập sách mới!");
                }
            </script>
            
            <!-- Result display area (optional) -->
            <div id="searchResults"></div>

            <h2>Danh sách sách</h2>
            <div class="table-container">                
                <table>
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã sách</th>
                            <th>Tên sách</th>
                            <th>Tác giả</th>
                            <th>NXB</th>
                            <th>Thể loại</th>
                            <th>Số trang</th>
                            <th>Giá tiền</th>
                            <th>Số lượng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr onclick="redirectToDetailsPage('D001')">
                            <td>1</td>
                            <td>NTC0101</td>
                            <td>Nàng tiên cá</td>
                            <td>Disney</td>
                            <td>Kim Đồng</td>
                            <td>Truyện cổ tích</td>
                            <td>150</td>
                            <td>44000</td>
                            <td>100</td>
                        </tr>
                        <tr onclick="redirectToDetailsPage('D002')">
                            <td>2</td>
                            <td>NTC01012</td>
                            <td>Đi tìm Nemo</td>
                            <td>Disney</td>
                            <td>Kim Đồng</td>
                            <td>Truyện cổ tích</td>
                            <td>200</td>
                            <td>65000</td>
                            <td>150</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <script>
                function redirectToDetailsPage(bookId) {
                    // Thực hiện chuyển hướng đến trang chi tiết với bookId là tham số
                    //turn bookId into a string
                    var bookIdString = bookId.toString();
                    window.location.href = 'single_product.php?id=' + bookIdString;
                }
                function redirectToCreateOrder() {
                    // Thực hiện chuyển hướng đến trang tạo mới đơn hàng
                    window.location.href = 'create-order.html';
                }

            </script>
            <br>
        <br>
        </div>
    </div>

    <!-- footer -->
    <div class="footer">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 item">
                        <h3><img class="footer-logo" src="img/logo_DABM_2.png" alt="Logo"></h3>
                        <ul>
                            <br>
                            <li>268 Lý Thường Kiệt, phường 14, quận</li>
                            <li>10, TP Hồ Chí Minh, Việt Nam</li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-2 item">
                        <h3>LIÊN KẾT</h3>
                        <ul>
                            <br>
                            <li><a href="#">Trang chủ</a></li>
                            <br>
                            <li><a href="#">Cửa hàng</a></li>
                            <br>
                            <li><a href="#">Giới thiệu về DABM</a></li>
                            <br>
                            <li><a href="#">Liên hệ</a></li>
                            <br>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-2 item">
                        <h3>VỀ DABM</h3>
                        <ul>
                            <br>
                            <li><a href="#">Điều khoản</a></li>
                            <br>
                            <li><a href="#">Thanh toán</a></li>
                            <br>
                            <li><a href="#">Chính sách bảo mật</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <h3>NHẬN THÔNG BÁO QUA EMAIL</h3>
                        <ul>
                            <br>
                            <div class="p-1 rounded border">
                                <div class="input-group">
                                    <input type="email" placeholder="Nhập email của bạn" class="form-control border-0 shadow-0">
                                    <div class="input-group-append">
                                        <a class="email_signup_button" href="index.html">ĐĂNG KÝ</a>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <hr>
                <p>
                    <div style="display: flex; justify-content: space-between; opacity:1; font-size:13px; margin-bottom:0;">
                    <div style="text-align: left;">2023 DABM. Tất cả các quyền được bảo lưu</div>
                    <div style="text-align: right;">Quốc gia & Khu vực: Việt Nam</div>
                </div></p>
            </div>
        </footer>
    </div> 
</body>

</html>