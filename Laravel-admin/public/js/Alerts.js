// thông báo khi xóa ảnh sản phẩm
function showDeleteConfirm() {
  return Swal.fire({
    title: "Bạn có chắc muốn xóa ảnh này?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonText: " Đồng ý, Xóa",
    cancelButtonText: "Hủy",
    confirmButtonColor: "#e3342f",
    cancelButtonColor: "#6c757d",
  });
}

// thông báo xóa biến thể
function confirmDeletion(
  message = "Bạn có chắc chắn muốn xóa mục này?",
  confirmText = "Đồng ý,Xóa",
) {
  return Swal.fire({
    title: message,
    text: "Hành động này không thể hoàn tác!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#d33",
    cancelButtonColor: "#3085d6",
    confirmButtonText: confirmText,
    cancelButtonText: "Hủy",
  });
}

// xóa danh mục chính (Quản lý danh mục sản phẩm)
document.querySelectorAll(".btn-delete-category").forEach((button) => {
  button.addEventListener("click", function (e) {
    e.preventDefault();
    const id = this.getAttribute("data-id");
    confirmDeletion("Bạn có chắc muốn xóa danh mục này?", "Đồng ý, Xóa").then(
      (result) => {
        if (result.isConfirmed) {
          document.getElementById("form-delete-category-" + id).submit();
        }
      },
    );
  });
});

// xóa thương hiệu( quản lý thương hiệu)
document.querySelectorAll(".btn-delete").forEach((button) => {
  button.addEventListener("click", function (e) {
    e.preventDefault();
    const id = this.getAttribute("data-id");
    confirmDeletion("Bạn có chắc chắn muốn xóa mục này?", "Đồng ý, Xóa").then(
      (result) => {
        if (result.isConfirmed) {
          document.getElementById("form-delete-" + id).submit();
        }
      },
    );
  });
});
// xóa danh mục phụ(Quản lý danh mục sản phẩm)
document.querySelectorAll(".btn-delete-sub").forEach((button) => {
  button.addEventListener("click", function (e) {
    e.preventDefault();
    const id = this.getAttribute("data-id");
    confirmDeletion("Bạn có chắc muốn xóa danh mục này?", "Đồng ý, Xóa").then(
      (result) => {
        if (result.isConfirmed) {
          document.getElementById("form-delete-sub-" + id).submit();
        }
      },
    );
  });
});

// khôi phục danh mục phục(Quản lý danh mục sản phẩm)
document.querySelectorAll(".btn-restore-category").forEach((button) => {
  button.addEventListener("click", function (e) {
    e.preventDefault();
    confirmAction({
      title: "Bạn có muốn khôi phục không?",
      text: "Thao tác này không thể hoàn tác!",
      confirmText: "Đồng ý",
      cancelText: "Hủy",
      confirmColor: "#28a745",
      cancelColor: "#dc3545",
      icon: "warning",
    }).then((result) => {
      if (result.isConfirmed) {
        button.closest("form").submit();
      }
    });
  });
});

//  thông báo xóa (đang dùng xóa vĩnh viễn danh mục bài viết + ql khuyến mãi + xóa thuộc tính edit)
function confirmDelete(message = "Bạn có chắc chắn muốn xóa mục này?") {
  return Swal.fire({
    title: message,
    text: "Thao tác này không thể hoàn tác!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonText: "Đồng ý,Xóa",
    cancelButtonText: "Hủy",
    confirmButtonColor: "#d33",
    cancelButtonColor: "#3085d6",
  });
}

// hàm khôi phục
function confirmAction({
  title = "Bạn có chắc chắn?",
  text = "Thao tác này không thể hoàn tác!",
  confirmText = "Đồng ý",
  cancelText = "Hủy",
  confirmColor = "#d33",
  cancelColor = "#3085d6",
  icon = "warning",
} = {}) {
  return Swal.fire({
    title,
    text,
    icon,
    showCancelButton: true,
    confirmButtonText: confirmText,
    cancelButtonText: cancelText,
    confirmButtonColor: confirmColor,
    cancelButtonColor: cancelColor,
    reverseButtons: true,
  });
}

// thay đổi trạng thái HOT(quản lý sản phẩm + quản lý bài viết)
document.addEventListener("DOMContentLoaded", function () {
  const toggleHotForms = document.querySelectorAll(".toggle-hot-form");
  toggleHotForms.forEach((form) => {
    form.addEventListener("submit", function (event) {
      event.preventDefault();

      confirmAction({
        title: "Bạn có chắc chắn thay đổi trạng thái?",
        text: "Thao tác này không thể hoàn tác!",
        confirmText: "Đồng ý",
        cancelText: "Hủy",
        confirmColor: "#d9dd00",
        cancelColor: "#3085d6",
        icon: "warning",
      }).then((result) => {
        if (result.isConfirmed) {
          form.submit(); // Chỗ này submit đúng form đang click
        }
      });
    });
  });
});

// khôi phục sản phẩm (Quản lý sản phẩm)
document.querySelectorAll(".btn-restore").forEach((button) => {
  button.addEventListener("click", function (e) {
    e.preventDefault();
    const form = button.closest("form");
    confirmAction({
      title: "Khôi phục sản phẩm?",
      text: "Thao tác này không thể hoàn tác!",
      confirmText: "Đồng ý khôi phục",
      cancelText: "Hủy",
      confirmColor: "#28a745",
      cancelColor: "#dc3545",
      icon: "warning",
    }).then((result) => {
      if (result.isConfirmed) {
        form.submit();
      }
    });
  });
});

// khôi phục lại thương hiệu(quản lý thương hiệu)
document.addEventListener("DOMContentLoaded", function () {
  const restoreButtons = document.querySelectorAll(".btn-restore-brand");
  restoreButtons.forEach((button) => {
    button.addEventListener("click", function () {
      confirmAction({
        title: "Bạn có chắc muốn khôi phục danh mục này?",
        text: "Thao tác này không thể hoàn tác!",
        confirmText: "Đồng ý",
        cancelText: "Hủy",
        confirmColor: "#28a745", // màu xanh cho nút Đồng ý
        cancelColor: "#d33", // màu đỏ cho nút Hủy
        icon: "warning",
      }).then((result) => {
        if (result.isConfirmed) {
          this.closest("form").submit();
        }
      });
    });
  });
});

//  xóa bình luận (Quản lý bình luận)
document.addEventListener("DOMContentLoaded", function () {
  const deleteButtons = document.querySelectorAll(".btn-delete-comment");

  deleteButtons.forEach((button) => {
    button.addEventListener("click", function () {
      confirmDelete("Bạn có chắc chắn muốn xóa bình luận này?").then(
        (result) => {
          if (result.isConfirmed) {
            this.closest("form").submit();
          }
        },
      );
    });
  });
});

// thông báo xóa index sản phẩm
document.addEventListener("DOMContentLoaded", function () {
  const deleteForms = document.querySelectorAll(".delete-form");
  deleteForms.forEach((form) => {
    form.addEventListener("submit", function (e) {
      e.preventDefault();
      Swal.fire({
        title: "Bạn có chắc chắn muốn xóa?",
        text: "Thao tác này không thể hoàn tác!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Đồng ý, xóa!",
        cancelButtonText: "Hủy",
      }).then((result) => {
        if (result.isConfirmed) {
          form.submit();
        }
      });
    });
  });
});
// thông báo hủy đơn hàng
const buttons2 = document.querySelectorAll(".change-stauts_1");
buttons2.forEach((button) => {
  button.addEventListener("click", function (event) {
    event.preventDefault();
    const idOrder = button.getAttribute("data-order-status");
    const Satuts = button.getAttribute("data-status");
    Swal.fire({
      title: "Bạn có chắc chắn hủy đơn hàng?",
      text: "Bạn có chắc chắn hủy đơn hàng?",
      icon: "error",
      showCancelButton: true,
      confirmButtonText: "Đồng ý, hủy",
      cancelButtonText: "Quay lại",
      reverseButtons: true,
    }).then((result) => {
      if (result.isConfirmed) {
        const form = document.getElementById("form-" + idOrder);
        const hidden = document.getElementById("hidden-status-" + idOrder);
        if (hidden) {
          hidden.value = Satuts;
        }
        form.submit();
      }
    });
  });
});

// thông báo đơn hàng (đang giao)
const buttons5 = document.querySelectorAll(".change-stauts_2");
buttons5.forEach((button) => {
  button.addEventListener("click", function (event) {
    event.preventDefault();
    const idOrder = button.getAttribute("data-order-status");
    const Satuts = button.getAttribute("data-status");
    Swal.fire({
      title: "Đơn hàng đang được xử lý ?",
      text: "Bạn có muốn chuyển trạng thái không ?",
      icon: "question",
      showCancelButton: true,
      confirmButtonText: "Đồng ý",
      cancelButtonText: "Quay lại",
      reverseButtons: true,
    }).then((result) => {
      if (result.isConfirmed) {
        const form = document.getElementById("form-" + idOrder);
        const hidden = document.getElementById("hidden-status-" + idOrder);
        if (hidden) {
          hidden.value = Satuts;
        }
        form.submit();
      }
    });
  });
});

// thông báo hoàn thành đơn hàng
const buttons6 = document.querySelectorAll(".change-stauts");
buttons6.forEach((button) => {
  button.addEventListener("click", function (event) {
    event.preventDefault();
    const idOrder = button.getAttribute("data-order-status");
    const Satuts = button.getAttribute("data-status");
    Swal.fire({
      title: "Đơn hàng đã hoàn thành?",
      text: "Bạn có chắc chắn đã hoàn thành?",
      icon: "success",
      showCancelButton: true,
      confirmButtonText: "Đồng ý",
      cancelButtonText: "Quay lại",
      reverseButtons: true,
    }).then((result) => {
      if (result.isConfirmed) {
        const form = document.getElementById("form-" + idOrder);
        const hidden = document.getElementById("hidden-status-" + idOrder);
        if (hidden) {
          hidden.value = Satuts;
        }
        form.submit();
      }
    });
  });
});

// thay đổi trạng thái(Quản lý sản phẩm + quản lý trang bài viết)
document.addEventListener("DOMContentLoaded", function () {
  const toggleForms = document.querySelectorAll(".form-toggle-status");
  toggleForms.forEach((form) => {
    form.addEventListener("submit", function (event) {
      event.preventDefault(); // Chặn submit thẳng
      confirmAction({
        title: "Xác nhận thay đổi trạng thái?",
        text: "Bạn có chắc muốn thực hiện?",
        confirmText: "Đồng ý",
        cancelText: "Hủy",
        confirmColor: "#008000",
        cancelColor: "#3085d6",
        icon: "warning",
      }).then((result) => {
        if (result.isConfirmed) {
          form.submit(); // Nếu đồng ý thì submit form
        }
      });
    });
  });
});

// thay đổi trạng thái (quản lý đánh giá )
document.addEventListener("DOMContentLoaded", function () {
  const buttons = document.querySelectorAll(".change-status");
  buttons.forEach((button) => {
    button.addEventListener("click", function (event) {
      event.preventDefault();
      const idUser = button.getAttribute("data-id");
      Swal.fire({
        title: "Thay đổi trạng thái!",
        text: "Bạn muốn thay đổi trạng thái?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Đồng ý",
        cancelButtonText: "Quay lại",
        reverseButtons: true,
      }).then((result) => {
        if (result.isConfirmed) {
          document.getElementById("idInput").value = idUser;
          document.getElementById("changeUserReview").submit();
        }
      });
    });
  });

  // thay đổi trạng thái(quản lý người dùng)
  const buttons1 = document.querySelectorAll(".acc-lock-user");
  buttons1.forEach((button) => {
    button.addEventListener("click", function (event) {
      event.preventDefault();
      const idUser = button.getAttribute("data-id-user");
      Swal.fire({
        title: "Thay đổi trạng thái tài khoản",
        text: "Bạn muốn thay đổi trạng thái tài khoản này?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Đồng ý",
        cancelButtonText: "Quay lại",
        reverseButtons: true,
      }).then((result) => {
        if (result.isConfirmed) {
          document.getElementById("idUserInput").value = idUser;
          document.getElementById("changeUserLock").submit();
        }
      });
    });
  });

  // Xóa banner
  const buttons3 = document.querySelectorAll(".delete-bn");
  buttons3.forEach((button) => {
    button.addEventListener("click", function (event) {
      event.preventDefault();
      const BanerId = button.getAttribute("data-id-bn");
      const from = document.getElementById("form-delete-" + BanerId);
      Swal.fire({
        title: "Bạn muốn xóa?",
        text: "Bạn chắc chắn xóa không?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Đồng ý",
        cancelButtonText: "Quay lại",
        reverseButtons: true,
      }).then((result) => {
        if (result.isConfirmed) {
          from.submit();
        }
      });
    });
  });

  // Khôi phục banner
  const buttons4 = document.querySelectorAll(".delete-bn-kp");
  buttons4.forEach((button) => {
    button.addEventListener("click", function (event) {
      event.preventDefault();
      const BanerId = button.getAttribute("data-id-bnres");
      const from = document.getElementById("form-delete-kp-" + BanerId);
      Swal.fire({
        title: "Bạn muốn khôi phục banner?",
        text: "Bạn chắc chắn khôi phục không?",
        icon: "info",
        showCancelButton: true,
        confirmButtonText: "Đồng ý",
        cancelButtonText: "Quay lại",
        reverseButtons: true,
      }).then((result) => {
        if (result.isConfirmed) {
          from.submit();
        }
      });
    });
  });
});

// KHÔI PHỤC DANH MỤC (Quản lý danh mục bài viết)
document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".restore-btn").forEach((btn) => {
    btn.addEventListener("click", function (e) {
      e.preventDefault();
      const form = this.closest("form");
      confirmAction({
        title: "Bạn muốn khôi phục danh mục này?",
        text: "Danh mục sẽ được khôi phục lại.",
        confirmText: "Đồng ý, Khôi phục",
        confirmColor: "#28a745",
      }).then((result) => {
        if (result.isConfirmed) {
          form.submit();
        }
      });
    });
  });

  // KHÔI PHỤC BÀI VIẾT(Quản lý bài viết)
  document.querySelectorAll(".restore-post-btn").forEach((button) => {
    button.addEventListener("click", function (event) {
      event.preventDefault();
      const id = this.getAttribute("data-restore-id");
      const form = document.getElementById("form-restore-" + id);
      confirmAction({
        title: "Bạn muốn khôi phục bài viết này?",
        text: "Bài viết sẽ được khôi phục.",
        confirmText: "Đồng ý, Khôi phục",
        confirmColor: "#28a745",
      }).then((result) => {
        if (result.isConfirmed) {
          form.submit();
        }
      });
    });
  });
});

//  khôi phục khuyến mãi(quản lý khuyến mãi)
document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".form-restore-khuyenmai").forEach((form) => {
    form.addEventListener("submit", function (e) {
      e.preventDefault();
      confirmAction({
        title: "Bạn muốn khôi phục khuyến mãi này?",
        text: "Khuyến mãi sẽ được khôi phục và hiện lại trên hệ thống.",
        icon: "info",
        confirmText: "Đồng ý, khôi phục",
        cancelText: "Hủy",
        confirmColor: "#28a745",
      }).then((result) => {
        if (result.isConfirmed) {
          form.submit();
        }
      });
    });
  });
});

// thông báo xóa bài viết
async function confirmDelete_post(id) {
  const res = await Swal.fire({
    title: "Bạn có chắc xóa bài viết này?",
    text: "Bài viết sẽ được chuyển vào thùng rác!",
    icon: "error",
    confirmButtonText: "Đồng ý",
    showCancelButton: true,
    cancelButtonText: "Hủy",
    reverseButtons: true,
  });
  if (res.isConfirmed) {
    document.getElementById(`form-delete-${id}`).submit();
  } else {
    // Không làm gì nếu hủy
  }
}

// xóa khuyến mãi (quản lý khuyến mãi)
document.querySelectorAll(".btn-delete-km").forEach((button) => {
  button.addEventListener("click", function (e) {
    e.preventDefault();
    const id = this.getAttribute("data-id");
    confirmDeletion(
      "Bạn có chắc chắn muốn xóa khuyến mãi này?",
      "Đồng ý, Xóa",
    ).then((result) => {
      if (result.isConfirmed) {
        document.getElementById("form-delete-km-" + id).submit();
      }
    });
  });
});

// khóa trang (quản lý nhân viên)
const disable = document.querySelectorAll(".acc-disable");
disable.forEach((button) => {
  button.addEventListener("click", function () {
    Swal.fire({
      title: "Bạn không thể khóa!",
      text: "Bạn không thể khóa tài khoản của chính mình!",
      icon: "error",
      confirmButtonText: "Đồng ý",
      reverseButtons: true,
    });
  });
});

// thay đổi trạng thái (quản lý danh mục bài viết + quản lý khuyến mãi + Quản lý danh mục sản phẩm)
document.querySelectorAll(".btn-toggle-status").forEach((button) => {
  button.addEventListener("click", function (e) {
    e.preventDefault();
    const id = button.getAttribute("data-id");
    Swal.fire({
      title: "Thay đổi trạng thái!",
      text: "Bạn có chắc muốn thay đổi trạng thái?",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Đồng ý",
      cancelButtonText: "Hủy",
      reverseButtons: true,
    }).then((result) => {
      if (result.isConfirmed) {
        document.getElementById("form-toggle-" + id).submit();
      }
    });
  });
});
// cập nhật trạng thái khóa/mở (Quản lý bình luận)
document.addEventListener("DOMContentLoaded", function () {
  const toggleButtons = document.querySelectorAll(".alerts-lock-open");

  toggleButtons.forEach((button) => {
    button.addEventListener("click", function () {
      confirmAction({
        title: "Bạn có chắc muốn thay đổi?",
        text: "Thao tác này sẽ cập nhật trạng thái bình luận.",
        confirmText: "Đồng ý",
        cancelText: "Hủy",
        icon: "warning",
        confirmColor: "#d9aa00",
        cancelColor: "#3085d6",
      }).then((result) => {
        if (result.isConfirmed) {
          this.closest("form").submit();
        }
      });
    });
  });
});

// xóa vĩnh viễn(quản lý danh mục bài)
document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".force-delete-btn").forEach((button) => {
    button.addEventListener("click", function (e) {
      e.preventDefault();
      const form = this.closest("form");
      confirmDelete("Bạn có chắc muốn xóa vĩnh viễn danh mục này?").then(
        (result) => {
          if (result.isConfirmed) {
            form.submit();
          }
        },
      );
    });
  });
});

// XÓA DANH MỤC (quản lý danh mục bài viết)
document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".delete-btn").forEach((btn) => {
    btn.addEventListener("click", function (e) {
      e.preventDefault(); // ngăn submit mặc định
      const form = this.closest("form");
      confirmDelete("Bạn có chắc muốn xóa danh mục này?").then((result) => {
        if (result.isConfirmed) {
          form.submit();
        }
      });
    });
  });

  // XÓA THUỘC TÍNH (thông báo form edit sản phẩm)
  document.querySelectorAll(".delete-attribute-btn").forEach((btn) => {
    btn.addEventListener("click", function () {
      const row = this.closest(".attribute-row");
      confirmDelete("Bạn có chắc muốn xóa thuộc tính này?").then((result) => {
        if (result.isConfirmed) {
          row.remove();
        }
      });
    });
  });
});

// --- ĐOẠN CODE BỔ SUNG ĐỂ MỞ MODAL CẤP QUYỀN NGƯỜI DÙNG ---
document.addEventListener("DOMContentLoaded", function () {
  // Lắng nghe sự kiện click vào nút màu vàng (Cấp quyền)
  const openModalButtons = document.querySelectorAll(".oppenCreateAdmin");

  openModalButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const userId = this.getAttribute("data-userAD-id");
      const modal = document.getElementById("modal_CrAd_" + userId);
      if (modal) {
        modal.classList.remove("hidden");
        modal.style.display = "flex"; // Đảm bảo modal hiển thị trên màn hình
      }
    });
  });

  // Lắng nghe sự kiện click vào nút dấu X để đóng Modal
  const closeModalButtons = document.querySelectorAll(".closeCreateAdmin");
  closeModalButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const userId = this.getAttribute("data-userAD-id");
      const modal = document.getElementById("modal_CrAd_" + userId);
      if (modal) {
        modal.classList.add("hidden");
        modal.style.display = "none";
      }
    });
  });
});

// --- ĐOẠN CODE KÍCH HOẠT MODAL SỬA NHÂN VIÊN ---
document.addEventListener("DOMContentLoaded", function () {
  // 1. Lắng nghe sự kiện click vào nút Sửa (class EditAdmin)
  const btnEditAdmin = document.querySelectorAll(".EditAdmin");

  btnEditAdmin.forEach((btn) => {
    btn.addEventListener("click", function (e) {
      e.preventDefault();
      // Lấy ID từ thuộc tính data-user_id mà bạn đã đặt ở file danh sách
      const userId = this.getAttribute("data-user_id");
      // Tìm modal có ID tương ứng trong file edit.blade.php
      const modal = document.getElementById("modal_EdAd_" + userId);

      if (modal) {
        modal.classList.remove("hidden");
        modal.style.display = "flex"; // Đảm bảo modal hiện lên
      } else {
        console.error("Không tìm thấy Modal với ID: modal_EdAd_" + userId);
      }
    });
  });

  // Xử lý đóng Modal sửa nhân viên
  document.addEventListener("click", function (e) {
    // Tìm nút đóng có class closeEditAdmin hoặc btn-x
    const closeBtn = e.target.closest(".closeEditAdmin, .btn-x");
    if (closeBtn) {
      const id = closeBtn.getAttribute("data-user_id");
      const modal = document.getElementById("modal_EdAd_" + id);
      if (modal) {
        modal.classList.add("hidden");
        modal.style.display = "none";
      }
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const btn = document.getElementById("avatar");
  const menu = document.getElementById("accountMenu");

  if (btn && menu) {
    btn.style.cursor = "pointer"; // Tạo hiệu ứng bàn tay khi rê vào

    btn.addEventListener("click", function (e) {
      e.stopPropagation();
      // Kiểm tra trạng thái hiện tại
      if (menu.style.display === "block") {
        menu.style.display = "none";
      } else {
        menu.style.display = "block";
      }
      console.log("Đã bấm vào Admin menu");
    });

    // Click ra ngoài bất kỳ đâu để đóng menu
    document.addEventListener("click", function () {
      menu.style.display = "none";
    });

    // Ngăn menu bị đóng khi click vào bên trong chính nó
    menu.addEventListener("click", function (e) {
      e.stopPropagation();
    });
  } else {
    console.error("Không tìm thấy ID 'avatar' hoặc 'accountMenu' trong HTML");
  }
});

document.addEventListener("DOMContentLoaded", function () {
  // 1. Mở Modal THÊM Banner (Dựa trên ID modal_banner bạn vừa gửi)
  const btnAdd = document.getElementById("openModalBnCr");
  const modalCreate = document.getElementById("modal_banner");

  if (btnAdd && modalCreate) {
    btnAdd.onclick = function (e) {
      e.preventDefault();
      modalCreate.classList.remove("hidden");
      modalCreate.style.display = "flex";
    };
  }

  // 2. Đóng Modal THÊM Banner (Dùng ID closeModalBnCr bên trong modal)
  const btnClose = document.getElementById("closeModalBnCr");
  if (btnClose && modalCreate) {
    btnClose.onclick = function () {
      modalCreate.classList.add("hidden");
      modalCreate.style.display = "none";
    };
  }

  // Đóng modal khi click ra ngoài vùng chứa content
  window.onclick = function (e) {
    if (e.target == modalCreate) {
      modalCreate.classList.add("hidden");
      modalCreate.style.display = "none";
    }
  };
});

// Hàm xử lý hiển thị ảnh xem trước khi chọn file Banner
function bannerImgCr(event) {
  const input = event.target;
  // Tìm thẻ img có ID preview_image_banner (khớp với HTML của bạn)
  const preview = document.getElementById("preview_image_banner");
  // Tìm thẻ chứa nội dung bên trong label để ẩn chữ "Thêm ảnh"
  const container = document.getElementById("image_banner");
  const placeholderText = container.querySelector("span");

  if (input.files && input.files[0]) {
    const reader = new FileReader();

    reader.onload = function (e) {
      // 1. Gán dữ liệu ảnh vào thẻ img
      preview.src = e.target.result;
      // 2. Hiện thẻ img lên
      preview.style.display = "block";
      preview.style.width = "100%";
      // 3. Ẩn chữ "Thêm ảnh"
      if (placeholderText) {
        placeholderText.style.display = "none";
      }
    };

    reader.readAsDataURL(input.files[0]);
  }
}

// --- ĐOẠN CODE KÍCH HOẠT MODAL SỬA BANNER ---
document.addEventListener("DOMContentLoaded", function () {
  // 1. Xử lý mở Modal Sửa khi click vào nút có class .openModalBnEdit
  document.addEventListener("click", function (e) {
    const btnEdit = e.target.closest(".openModalBnEdit");
    if (btnEdit) {
      e.preventDefault();
      // Lấy ID banner từ thuộc tính data-banner-id
      const id = btnEdit.getAttribute("data-banner-id");
      // Tìm đúng Modal theo cấu trúc ID: modal_banner_edit_{id}
      const modalEdit = document.getElementById("modal_banner_edit_" + id);

      if (modalEdit) {
        modalEdit.classList.remove("hidden");
        modalEdit.style.display = "flex";
      } else {
        console.error(
          "Không tìm thấy Modal sửa với ID: modal_banner_edit_" + id,
        );
      }
    }

    // 2. Xử lý đóng Modal Sửa (Nút X hoặc nút Hủy)
    const closeBtn = e.target.closest(".closeModalBnEdit");
    if (closeBtn) {
      const modal = closeBtn.closest(".modal_create");
      if (modal) {
        modal.classList.add("hidden");
        modal.style.display = "none";
      }
    }
  });
});

// 3. Hàm hiển thị ảnh xem trước cho Form Sửa (Preview Image)
function bannerImg(event, id) {
  const input = event.target;
  const container = document.getElementById("image_banner_" + id);
  const previewImg = container.querySelector("img");

  if (input.files && input.files[0]) {
    const reader = new FileReader();
    reader.onload = function (e) {
      previewImg.src = e.target.result;
      previewImg.style.display = "block";
      previewImg.style.width = "350px"; // Khớp với style trong Blade của bạn
    };
    reader.readAsDataURL(input.files[0]);
  }
}

// --- ĐOẠN CODE XỬ LÝ ẢNH SẢN PHẨM (DẤU CỘNG VÀ XÓA) ---

// 1. Hàm thêm ô chọn ảnh mới khi bấm vào dấu cộng
function addNewImageUpload() {
  const container = document.getElementById("image-upload-container");
  const addButton = document.querySelector(".add-more-image");

  // Tạo index ngẫu nhiên hoặc dựa trên số lượng ô hiện có để tránh trùng ID
  const newIndex = Date.now();

  const newUploadHtml = `
        <div class="product-upload-img" id="product-img-container-${newIndex}">
            <div class="box-img-upload">
                <img class="preview-image" id="preview-image-${newIndex}" alt="Xem trước ảnh" style="display: none; width: 100%; height: auto;">
                <i id="preview-icon-${newIndex}" class="fa-solid fa-image" style="font-size: 48px; color: #aaa;"></i>
                <label style="position: absolute; inset: 0; cursor: pointer;">
                    <input class="input-text custom__input-file" type="file" name="img_products[]"
                        accept="image/*" onchange="previewImagesForProductForm(event, ${newIndex})"
                        style="opacity: 0; width: 100%; height: 100%; cursor: pointer;">
                </label>
                <button type="button" class="remove-image" onclick="removeProductImage(${newIndex})">❌</button>
            </div>
        </div>`;

  // Chèn ô mới vào trước nút dấu cộng
  addButton.insertAdjacentHTML("beforebegin", newUploadHtml);
}

// 2. Hàm hiển thị ảnh xem trước (Preview) sau khi chọn file
function previewImagesForProductForm(event, index) {
  const input = event.target;
  const preview = document.getElementById(`preview-image-${index}`);
  const icon = document.getElementById(`preview-icon-${index}`);

  if (input.files && input.files[0]) {
    const reader = new FileReader();
    reader.onload = function (e) {
      preview.src = e.target.result;
      preview.style.display = "block"; // Hiện ảnh
      if (icon) icon.style.display = "none"; // Ẩn icon
    };
    reader.readAsDataURL(input.files[0]);
  }
}

// 3. Hàm xóa ô ảnh
function removeProductImage(index) {
  const element = document.getElementById(`product-img-container-${index}`);
  if (element) {
    element.remove();
  }
}

/**
 * QUẢN LÝ THÊM THUỘC TÍNH, BIẾN THỂ VÀ ẢNH CHO KHUƠNG
 */

document.addEventListener("DOMContentLoaded", function () {
  // 1. Xử lý Thêm Thuộc tính
  const btnAddAttr = document.querySelector(".plus-icon-attribute");
  if (btnAddAttr) {
    btnAddAttr.addEventListener("click", function () {
      const container = document.getElementById("attribute-container");
      const index = Date.now();
      const html = `
                <div class="product-input-group" id="attr-${index}">
                    <div class="attributes-key">
                        <input class="input-text" type="text" name="attributes[key][]" placeholder="Tên thuộc tính">
                    </div>
                    <div class="attributes-value">
                        <input class="input-text" type="text" name="attributes[value][]" placeholder="Giá trị">
                    </div>
                    <div class="delete-container">
                        <a href="javascript:void(0)" class="delete-btn-custom" style="color:red; text-decoration:none;">Xóa</a>
                    </div>
                </div>`;
      container.insertAdjacentHTML("beforeend", html);
    });
  }

  // 2. Xử lý Thêm Biến thể
  const btnAddVariant = document.querySelector(".plus-icon-variants");
  if (btnAddVariant) {
    btnAddVariant.addEventListener("click", function () {
      const container = document.getElementById("variants-product");
      const index = Date.now();
      const html = `
                <div class="product-variants" id="var-${index}" style="margin-top:15px; border-top:1px dashed #ccc; padding-top:10px;">
                    <div class="product-variants-left">
                        <input class="input-text" type="text" placeholder="Tên Biến Thể" name="variants[option][]">
                        <div class="product-variants-row">
                            <input class="input-text" type="number" placeholder="Số Lượng" name="variants[stock][]">
                            <input class="input-text" type="number" placeholder="Giá tiền" name="variants[price][]">
                        </div>
                    </div>
                    <div class="product-upload-status-variants">
                        <div class="box-img-uploadd" style="position:relative;">
                            <img id="prev-v-${index}" style="display:none; width:100%; height:100%; object-fit:cover;">
                            <i id="icon-v-${index}" class="fa-solid fa-image" style="font-size:40px; color:#ccc;"></i>
                            <input type="file" name="variants[image][]" style="position:absolute; inset:0; opacity:0; cursor:pointer;" 
                                   onchange="previewFunc(this, 'prev-v-${index}', 'icon-v-${index}')">
                        </div>
                    </div>
                    <div class="button-product-variants">
                        <a href="javascript:void(0)" class="delete-btn-custom" style="color:red; text-decoration:none;">Xóa</a>
                    </div>
                </div>`;
      container.insertAdjacentHTML("beforeend", html);
    });
  }

  // 3. Xử lý xóa chung cho các phần tử thêm mới (Dùng chung cho cả 2)
  document.addEventListener("click", function (e) {
    if (e.target && e.target.classList.contains("delete-btn-custom")) {
      e.preventDefault();
      const row =
        e.target.closest(".product-input-group") ||
        e.target.closest(".product-variants");
      if (row) row.remove();
    }
  });
});

// Hàm bổ trợ xem trước ảnh cho biến thể mới
function previewFunc(input, imgId, iconId) {
  if (input.files && input.files[0]) {
    const reader = new FileReader();
    reader.onload = function (e) {
      const img = document.getElementById(imgId);
      const icon = document.getElementById(iconId);
      img.src = e.target.result;
      img.style.display = "block";
      if (icon) icon.style.display = "none";
    };
    reader.readAsDataURL(input.files[0]);
  }
}

// 1. Dành cho các biến thể đã có sẵn khi load trang (Trang Edit)
function previewImage(input) {
  // Tìm cái hộp cha (container) bao ngoài input và ảnh
  // Dựa vào class 'box-img-uploadd' từ code HTML bạn vừa gửi
  const container = input.closest(".box-img-uploadd");

  // Tìm thẻ ảnh nằm trong cái hộp đó
  const preview = container.querySelector(".preview-image");

  // Tìm icon nằm trong cái hộp đó (nếu có) để ẩn đi
  const icon = container.querySelector(".fa-image"); // Hoặc icon nào đó bạn đang dùng

  if (input.files && input.files[0]) {
    const reader = new FileReader();
    reader.onload = function (e) {
      if (preview) {
        preview.src = e.target.result;
        preview.style.display = "block"; // Hiện ảnh
        preview.style.width = "100%";
      }
      if (icon) {
        icon.style.display = "none"; // Ẩn icon đi
      }
    };
    reader.readAsDataURL(input.files[0]);
  }
}

// 2. Dành cho các biến thể được thêm mới bằng nút Dấu cộng (+)
function previewFunc(input, imgId, iconId) {
  if (input.files && input.files[0]) {
    const reader = new FileReader();
    reader.onload = function (e) {
      const img = document.getElementById(imgId);
      const icon = document.getElementById(iconId);

      if (img) {
        img.src = e.target.result;
        img.style.display = "block";
        img.style.width = "100%";
        img.style.height = "auto";
        if (icon) icon.style.display = "none";
      }
    };
    reader.readAsDataURL(input.files[0]);
  }
}

let listXoaAnh = [];
function editRemoveImage(index) {
  const divAnh = document.getElementById("product-img-" + index);
  const idAnh = divAnh.querySelector("input").getAttribute("data-id"); // Lấy ID từ DB

  if (idAnh) {
    listXoaAnh.push(idAnh);
    document.getElementById("deleted_images").value = listXoaAnh.join(",");
  }
  divAnh.remove(); // Xóa khỏi màn hình
}

// Khai báo mảng toàn cục (để ngoài DOMContentLoaded nếu cần)
let xoaThuocTinh = [];
let xoaBienThe = [];

document.addEventListener("click", function (e) {
  // 1. XỬ LÝ XÓA THUỘC TÍNH
  if (e.target.classList.contains("delete-attribute")) {
    e.preventDefault();
    const row = e.target.closest(".product-input-group");
    // Tìm ID từ input hidden mà bạn đã đặt: name="attributes[id][]"
    const idInput = row.querySelector('input[name="attributes[id][]"]');

    if (idInput && idInput.value) {
      xoaThuocTinh.push(idInput.value);
      // Gán vào input hidden (nhớ dùng join để tạo chuỗi 1,2,3)
      document.getElementById("deleted_attributes").value =
        xoaThuocTinh.join(",");
    }
    row.remove();
    console.log("Danh sách thuộc tính sẽ xóa:", xoaThuocTinh);
  }

  // 2. XỬ LÝ XÓA BIẾN THỂ
  if (e.target.classList.contains("delete-variant")) {
    e.preventDefault();
    const row = e.target.closest(".product-variants");
    // Lấy ID từ attribute data-id bạn đã đặt ở nút xóa
    const variantId = e.target.getAttribute("data-id");

    if (variantId) {
      xoaBienThe.push(variantId);
      document.getElementById("deleted_variants").value = xoaBienThe.join(",");
    }
    row.remove();
    console.log("Danh sách biến thể sẽ xóa:", xoaBienThe);
  }
});

document.addEventListener("DOMContentLoaded", function () {
  // Xử lý ẩn hiện chi tiết đơn hàng
  const toggleDetails = document.querySelectorAll(".hienthi_detail");

  toggleDetails.forEach((button) => {
    button.addEventListener("click", function () {
      const orderId = this.getAttribute("data-order-id");
      const icon = this.querySelector("i");

      // Tìm tất cả các phần tử liên quan đến đơn hàng này
      const detailElements = [
        document.getElementById(`an-dh-${orderId}`),
        document.getElementById(`detail-${orderId}`),
        ...document.querySelectorAll(`#details-${orderId}`),
      ];

      detailElements.forEach((el) => {
        if (el) {
          // Toggle hiển thị
          if (el.style.display === "none" || el.style.display === "") {
            el.style.display = "grid"; // Hoặc 'block' tùy CSS của bạn
            icon.classList.replace("fa-plus", "fa-minus");
          } else {
            el.style.display = "none";
            icon.classList.replace("fa-minus", "fa-plus");
          }
        }
      });
    });
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const addBtn = document.querySelector(".add-more-image");

  if (addBtn) {
    addBtn.addEventListener("click", addNewImageUpload);
  }
});

document.addEventListener("DOMContentLoaded", function () {
  console.log("DOM đã tải xong, bắt đầu gắn sự kiện...");

  // --- XÓA THƯƠNG HIỆU ---
  const deleteButtons = document.querySelectorAll(".btn-delete");
  deleteButtons.forEach((button) => {
    button.addEventListener("click", function (e) {
      e.preventDefault();
      const id = this.getAttribute("data-id");
      const form = document.getElementById("form-delete-" + id);

      if (!form) {
        console.error("Không tìm thấy form với ID: form-delete-" + id);
        return;
      }

      confirmDeletion("Bạn có chắc chắn muốn xóa mục này?", "Đồng ý, Xóa").then(
        (result) => {
          if (result.isConfirmed) {
            form.submit();
          }
        },
      );
    });
  });

  // ... Đưa tất cả các đoạn document.querySelectorAll khác vào trong này ...
});
