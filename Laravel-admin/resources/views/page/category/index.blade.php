@extends('layout')

@section('title', 'Quản lý danh mục sản phẩm')

@section('content')
<main>
  <section class="page-main" style="padding-bottom: 50px">
    <div class="header-filter-shared">
      <ul>
        <li>
          <a href="{{ route('page.category.index')}}" class="{{ request()->query('query') == null ? 'active' : '' }}">
            Tất cả
          </a>
        </li>
        <li>
          <a href="{{ route('page.category.index', ['query' => 'sub-hidden']) }}"
            class="{{ request()->query('query') == 'sub-hidden' ? 'active' : '' }}">
            Danh mục phụ ẩn</a>
        </li>
        <li>
          <a href="{{ route('page.category.index', ['query' => 'deleted']) }}"
            class="{{ request()->query('query') == 'deleted' ? 'active' : '' }}">
            Danh mục xóa</a>
        </li>
        <li>
          <a href="{{ route('page.category.index', ['query' => 'deleted-sub']) }}"
            class="{{ request()->query('query') == 'deleted-sub' ? 'active' : '' }}">
            Danh mục phụ xóa</a>
        </li>
      </ul>
    </div>
    <div class="navbar">
      {{-- <div class="rong"></div> --}}
      <form method="GET" class="glass-us">
        <div class="sr-container">
          <input type="text" name="key" placeholder="Tìm kiếm danh mục" value="{{ request()->key }}">
          <i class="fa-solid fa-magnifying-glass"></i>
        </div>
      </form>

      <div class="filter-addbtn-right">
        <form method="GET" id="thutu1" class="xs-us">
          <div class="sr-container">
            <select name="sort" onchange="this.form.submit()">
              <option value="">Lọc danh mục</option>
              <option value="newest" {{ request()->sort == 'newest' ? 'selected' : '' }}>Mới nhất</option>
              <option value="oldest" {{ request()->sort == 'oldest' ? 'selected' : '' }}>Cũ nhất</option>
            </select>
          </div>
        </form>
        <div class="cr-sp">
          <button id="openModalBtn"> <i class="fa-solid fa-circle-plus"></i>Thêm danh mục</button>
        </div>
      </div>
    </div>

    {{-- Popup Thêm Danh Mục --}}
    <div id="addCategoryModal"
      style="display:none; position:fixed; top:0; left:0; right:0; bottom:0; background:rgba(0,0,0,0.5); justify-content:center; align-items:center; z-index: 1;">
      <div style="background:#fff; padding:20px; border-radius:12px; width:600px; position:relative;">
        <!-- Nút đóng -->
        <button id="closeAddCategoryModalBtn" style="
          position:absolute; top:10px; right:10px; 
          background:none; border:none; 
          font-size:22px; cursor:pointer;">&times;
        </button>

        <!-- Form thêm danh mục -->
        <form action="{{ route('categorysp.store') }}" method="POST">
          @csrf
          <div class="create-form">
            <h3 style="margin-bottom: 16px;">Thêm danh mục</h3>

            <div class="form-group" style="margin-bottom: 12px;">
              <label for="categoryName">Tên Danh Mục</label>
              <input type="text" name="name" class="form-control" id="categoryName" required>
            </div>

            @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <div class="form-group">
              <button type="submit" class="btn btn-primary">Thêm mới</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    {{-- Popup Sửa Danh Mục --}}
    <div id="editCategoryModal" style="
          display:none; 
          position:fixed; 
          top:0; left:0; right:0; bottom:0; 
          background:rgba(0,0,0,0.5); 
          justify-content:center; 
          align-items:center;
          z-index: 1;
          ">
      <div style="background:#fff; padding:20px; border-radius:12px; width:600px; position:relative;">
        <button id="closeEditCategoryModalBtn" style="
        position:absolute; top:10px; right:10px; 
        background:none; border:none; 
        font-size:22px; cursor:pointer;">&times;
        </button>

        <form id="editCategoryForm" method="POST">
          @csrf
          @method('PUT')
          <div class="create-form">
            <h3 style="margin-bottom: 16px;">Sửa danh mục</h3>

            <div class="form-group" style="margin-bottom: 12px;">
              <label for="editCategoryName">Tên Danh Mục</label>
              <input type="text" name="name" class="form-control" id="editCategoryName" required>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    {{-- Popup Thêm Danh Mục Phụ --}}
    <div id="addSubCategoryModal"
      style="display:none; position:fixed; top:0; left:0; right:0; bottom:0; background:rgba(0,0,0,0.5); justify-content:center; align-items:center; z-index: 2;">
      <div style="background:#fff; padding:20px; border-radius:12px; width:600px; position:relative;">
        <button id="closeAddSubCategoryModalBtn"
          style="position:absolute; top:10px; right:10px; background:none; border:none; font-size:22px; cursor:pointer;">&times;</button>
        <form action="{{route('subcategory.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="create-form">
            <h3 style="margin-bottom: 16px;">Thêm danh mục phụ</h3>
            <input type="hidden" name="id_main_category" id="parentCategoryId">
            <div class="form-group" style="margin-bottom: 12px;">
              <label>Tên Danh Mục Phụ</label>
              <input type="text" name="name" class="form-control" required>
            </div>
            <div class="flex-sort-status">
              <div class="sort-cate" style="margin-bottom: 12px;">
                <label for="sort">Vị trí</label>
                <input type="number" name="sort" class="form-control" id="sort" required step="1" min="1" max="50">
              </div>

              <div class="status-cate toggle-group">
                <label for="status">Trạng thái</label>
                <input type="hidden" name="status" value="0">
                <label class="switch">
                  <input type="checkbox" name="status" value="1" id="status" checked>
                  <span class="slider round"></span>
                </label>
              </div>
            </div>
            <div class="form-group" style="margin-bottom: 12px;">
              <label>Ảnh</label>
              <input type="file" name="img" class="form-control" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Thêm mới</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    {{-- Popup Sửa Danh Mục Phụ --}}
    <div id="editSubCategoryModal"
      style="display:none; position:fixed; top:0; left:0; right:0; bottom:0; background:rgba(0,0,0,0.5); justify-content:center; align-items:center; z-index: 2;">
      <div style="background:#fff; padding:20px; border-radius:12px; width:600px; position:relative;">
        <button id="closeEditSubCategoryModalBtn"
          style="position:absolute; top:10px; right:10px; background:none; border:none; font-size:40px; cursor:pointer;">&times;</button>
        <form id="editSubCategoryForm" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="create-form">
            <h3 style="margin-bottom: 16px;">Sửa danh mục phụ</h3>
            <input type="hidden" name="id_main_category" id="editSubParentId">
            <div class="form-group" style="margin-bottom: 12px;">
              <label>Tên Danh Mục Phụ</label>
              <input type="text" name="name" class="form-control" id="editSubCategoryName" required>
            </div>
            <div class="flex-sort-status">
              <div class="sort-cate" style="margin-bottom: 12px;">
                <label for="editSubSort">Vị trí</label>
                <input type="number" name="sort" class="form-control" id="editSubSort" required min="0" step="1">
              </div>

              <div class="status-cate toggle-group">
                <label for="editSubStatus">Trạng thái</label>
                <input type="hidden" name="status" value="0">
                <label class="switch">
                  <input type="checkbox" name="status" value="1" id="editSubStatus">
                  <span class="slider round"></span>
                </label>
              </div>
            </div>
            <div class="form-group" style="margin-bottom: 12px;">
              <label>Ảnh (có thể bỏ trống nếu không thay đổi)</label>
              <input type="file" name="img" class="form-control">
              <img id="editSubPreviewImg" src="" alt="Ảnh hiện tại"
                style="max-width: 100%; height: 150px; border: 1px solid #ccc; padding: 4px; border-radius: 8px;">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    @if (request()->query('query') == 'deleted-sub')
    <div class="grid-categorySub-layout dms_shared grid_table_th_shared_sb danhmuc-th">
      <div></div>
      <div>DMP</div>
      <div>Tên danh mục</div>
      <div>Ảnh</div>
      <div>Thứ tự</div>
      <div>Số lượng SP</div>
      <div>Trạng thái</div>
      <div>Hành động</div>
      <div></div>
    </div>

    @foreach ($subDeleted as $sub)
    <div class="grid-categorySub-layout dms_shared grid_table_tb_shared_sb sub-category danhmuc-tr">
      <div></div>
      <div>DMP{{ $sub->id }}</div>
      <div>{{ $sub->name }}</div>
      <div><img src="{{ asset($sub->image) }}" alt="Loading..." width="100px" /></div>
      <div>{{ $sub->sort }}</div>
      <div>{{$sub->products_count}}</div>
      <div>
        <form class="form-toggle-status" id="form-toggle-{{ $sub->id }}" action="{{ route('category.togglestatus', $sub->id) }}" method="POST" style="display:inline;">
          @csrf
          <button type="button" class="btn-toggle-status icon-status-btns hover_scale_btn {{ $sub->status == 1 ? 'icon-status-mount' : 'icon-status-unmount' }}" title="{{ $sub->status == 1 ? 'Nhấn để ẩn' : 'Nhấn để hiện' }}" data-id="{{ $sub->id }}">
            <i class="fa-solid {{ $sub->status == 1 ? 'fa-eye' : 'fa-eye-slash' }}"></i>
          </button>
        </form>
      </div>
      <div class="actions-d  ct">
        <form action="{{ route('categoriesSub.restore', $sub->id) }}" method="POST" style="display:inline;">
          @csrf
          @method('PUT')
          <button type="button" class="btn-restore-category border-green hover_scale_btn" title="Khôi phục">
            <i class="fa-solid fa-rotate-left"></i>
            {{-- <p>Khôi phục</p> --}}
          </button>
        </form>
        
      </div>
      <div></div>
    </div>
    @endforeach

    @elseif(request()->query('query') == 'sub-hidden')
    <div class="grid-categorySub-layout dms_shared grid_table_th_shared_sb danhmuc-th">
      <div></div>
      <div>DMP</div>
      <div>Tên danh mục</div>
      <div>Ảnh</div>
      <div>Thứ tự</div>
      <div>Số lượng SP</div>
      <div>Trạng thái</div>
      <div>Hành động</div>
      <div></div>
    </div>

    @foreach ($subHidden as $sub)
    <div class="grid-categorySub-layout dms_shared grid_table_tb_shared_sb sub-category danhmuc-tr">
      <div></div>
      <div>DMP{{ $sub->id }}</div>
      <div>{{ $sub->name }}</div>
      <div><img src="{{ asset($sub->image) }}" alt="Loading..." width="100px" /></div>
      <div>{{ $sub->sort }}</div>
      <div>{{$sub->products_count}}</div>
      <div>
        <form class="form-toggle-status" id="form-toggle-{{ $sub->id }}" action="{{ route('category.togglestatus', $sub->id) }}" method="POST" style="display:inline;">
          @csrf
          <button type="button" class="btn-toggle-status hover_scale_btn" data-id="{{ $sub->id }}" style="background:none; border:none; cursor:pointer;">
            @if($sub->status == 1)
              <i class="fa-solid fa-eye icon-status-btns icon-status-mount" title="Nhấn để ẩn"></i>
            @else
              <i class="fa-solid fa-eye-slash icon-status-btns icon-status-unmount" title="Nhấn để hiện"></i>
            @endif
          </button>
        </form>
        
      
      </div>
      <div class="actions-d  ct">
        <button class="border-yellow editBtn hover_scale_btn" title="Sửa danh mục" data-id="{{ $sub->id }}" data-name="{{ $sub->name }}"
          data-image="{{ asset($sub->image) }}">
          <i class="fa-regular fa-pen-to-square"></i>
          {{-- <p>Sửa</p> --}}
        </button>
        <form action="{{ route('subcate.destroy', $sub->id) }}" method="POST" style="display:inline;" id="form-delete-sub-{{ $sub->id }}">
          @csrf
          @method('DELETE')
          <button type="submit" class="border-red btn-delete-sub hover_scale_btn" title="Xóa danh mục" data-id="{{ $sub->id }}">
            <i class="fa-regular fa-trash-can"></i>
            {{-- <p>Xóa</p> --}}
          </button>
        </form>        
      </div>
      <div></div>
    </div>
    @endforeach
    @else
    <div class="gird-all">
      <div class="grid_table_th_shared grid-category-layout header">
        <div></div>
        <div>DM</div>
        <div>Tên danh mục</div>
        <div>Trạng thái</div>
        <div></div>
      </div>


      {{-- Categories --}}
      @foreach ($categories as $category)
      <div class="grid_table_tb_shared  grid-category-layout category cate-show-dh" data-category="{{$category->id}}">
        <div>
          <span id="down{{$category->id}}"><i class="fa-solid fa-chevron-down"></i></span>
          <span id="up{{$category->id}}" style="display: none"><i class="fa-solid fa-chevron-up"></i></span>
        </div>
        <div style="font-weight: 600">{{ $category->id }}</div>
        <div>{{ $category->name }}</div>
        <div>
          <div class="actions-d ct">
            @if(request()->query('query') === 'deleted')
            <form action="{{ route('categoriesMain.restore', $category->id) }}" method="POST" style="display:inline;">
              @csrf
              @method('PUT')
              <button type="button" class="btn-restore-category border-green hover_scale_btn" title="Khôi phục">
                <i class="fa-solid fa-rotate-left"></i>
                {{-- <p>Khôi phục</p> --}}
              </button>
            </form>
            @else
            <button class="border-green openAddSubCategoryModalBtn hover_scale_btn" title="Thêm danh mục phụ" data-id="{{ $category->id }}"><i
                class="fa-solid fa-circle-plus"></i>
            </button>
            <button class="border-yellow editBtn hover_scale_btn" title="Sửa danh mục" data-id="{{ $category->id }}"
              data-name="{{ $category->name }}">
              <i class="fa-regular fa-pen-to-square"></i>
              {{-- <p>Sửa</p> --}}
            </button>
            <form action="{{ route('categorysp.destroy', $category->id) }}" method="POST" style="display:inline;" id="form-delete-category-{{ $category->id }}">
              @csrf
              @method('DELETE')
              <button type="submit" title="Xóa danh mục" class="border-red btn-delete-category hover_scale_btn" data-id="{{ $category->id }}">
                <i class="fa-regular fa-trash-can"></i>
                {{-- <p>Xóa</p> --}}
              </button>
            </form>
            
            @endif
          </div>
        </div>
        <div></div>
      </div>
      {{-- Sub-categories --}}
      <div class="an-dmp dmp dms_shared" id="an-dhp-{{$category->id}}">
        <div class="actions-d">
          <div>Danh mục phụ</div>
        </div>
      </div>
      <div class="grid-categorySub-layout dms_shared grid_table_th_shared_sb danhmuc-th" id="title-{{$category->id}}">
        <div></div>
        <div>DMP</div>
        <div>Tên danh mục</div>
        <div>Ảnh</div>
        <div>Thứ tự</div>
        <div>Số lượng SP</div>
        <div>Trạng thái</div>
        <div>Hành động</div>
        <div></div>
      </div>
      @foreach ($category->sub_category as $sub)
      <div class=" grid-categorySub-layout dms_shared grid_table_tb_shared_sb sub-category danhmuc-tr"
        id="detail-category-{{$category->id}}">
        <div></div>
        <div>DMP{{ $sub->id }}</div>
        <div>{{ $sub->name }}</div>
        <div><img src="{{ asset($sub->image) }}" alt="Loading..." width="100px" /></div>
        <div>{{$sub->sort}}</div>
        <div>{{$sub->products_count}}</div>
        <div>
          <form class="form-toggle-status" id="form-toggle-{{ $sub->id }}" action="{{ route('category.togglestatus', $sub->id) }}" method="POST" style="display:inline;">
            @csrf
            <button type="button" class="btn-toggle-status icon-status-btns hover_scale_btn {{ $sub->status == 1 ? 'icon-status-mount' : 'icon-status-unmount' }}" title="{{ $sub->status == 1 ? 'Nhấn để ẩn' : 'Nhấn để hiện' }}" data-id="{{ $sub->id }}">
              <i class="fa-solid {{ $sub->status == 1 ? 'fa-eye' : 'fa-eye-slash' }}"></i>
            </button>
          </form>    
        </div>
        <div class="actions-d  ct">
          <button class="border-yellow editBtn hover_scale_btn" title="Sửa danh mục" data-id="{{ $sub->id }}"
            data-name="{{ $sub->name }}" data-image="{{ asset($sub->image) }}">
            <i class="fa-regular fa-pen-to-square"></i>
            {{-- <p>Sửa</p> --}}
          </button>
          <form action="{{ route('subcate.destroy', $sub->id) }}" method="POST" style="display:inline;" id="form-delete-sub-{{ $sub->id }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="border-red btn-delete-sub hover_scale_btn" title="Xóa danh mục" data-id="{{ $sub->id }}">
              <i class="fa-regular fa-trash-can"></i>
              {{-- <p>Xóa</p> --}}
            </button>
          </form>
          
        </div>
        <div></div>
      </div>
      @endforeach

      @endforeach
      @endif
    </div>
  </section>

  {{-- Grid Header --}}


  <script>
    function toggleCategory(id) {
      let subCategories = document.querySelectorAll('.sub-category-' + id);
      subCategories.forEach(sub => {
        sub.style.display = (sub.style.display === "none" || sub.style.display === "") ?
          "grid" : "none";
      });
    }
    document.querySelectorAll('.cate-show-dh').forEach(function(button) {
      button.addEventListener('click', function() {
        var cate = button.getAttribute('data-category');
        var subcate = document.getElementById('title-' + cate);
        var content = document.querySelectorAll('#detail-category-' + cate);
        var danhmucphu = document.getElementById('an-dhp-' + cate);
        var down = document.getElementById('down' + cate);
        var up = document.getElementById('up' + cate);
        subcate.classList.toggle('hien');
        content.forEach(function(cat) {
          cat.classList.toggle('hien');
        })
        button.classList.toggle('active');
        var rowdm = button.closest('.category');
        rowdm.classList.toggle('.active');
        var kiemtra = Array.from(content).some((rowdm) =>
          rowdm.classList.contains("hien"));
        danhmucphu.style.display = kiemtra ? "grid" : "none";
        down.style.display = kiemtra ?"none" : "grid"  ;
        up.style.display = kiemtra ?  "grid" :  "none";
      })
    })

    // Popup thêm danh mục
  const openCategoryModalBtn = document.getElementById('openModalBtn');
  const closeAddCategoryModalBtn = document.getElementById('closeAddCategoryModalBtn');
  const addCategoryModal = document.getElementById('addCategoryModal');

  openCategoryModalBtn.onclick = () => {
    addCategoryModal.style.display = 'flex';
  };

  closeAddCategoryModalBtn.onclick = () => {
    addCategoryModal.style.display = 'none';
  };

  window.onclick = (e) => {
    if (e.target === addCategoryModal) {
      addCategoryModal.style.display = 'none';
    }
  };

  // Popup sửa danh mục
  const editCategoryModal = document.getElementById('editCategoryModal');
  const closeEditCategoryModalBtn = document.getElementById('closeEditCategoryModalBtn');
  const editCategoryForm = document.getElementById('editCategoryForm');
  const editCategoryNameInput = document.getElementById('editCategoryName');

  document.querySelectorAll('.editBtn').forEach(function(btn) {
    btn.addEventListener('click', function(e) {
      e.stopPropagation(); // tránh toggle danh mục phụ khi click nút sửa
      const categoryRow = btn.closest('.cate-show-dh');
      const categoryId = categoryRow.getAttribute('data-category');
      const categoryName = btn.getAttribute('data-name');

      // Gán dữ liệu vào form
      editCategoryNameInput.value = categoryName;
      editCategoryForm.action = `/danhmuc/${categoryId}`;

      editCategoryModal.style.display = 'flex';
    });
  });

  closeEditCategoryModalBtn.onclick = () => {
    editCategoryModal.style.display = 'none';
  };

  window.addEventListener('click', function(e) {
    if (e.target === editCategoryModal) {
      editCategoryModal.style.display = 'none';
    }
  });

 // Popup thêm danh mục phụ
const addSubCategoryModal = document.getElementById('addSubCategoryModal');
const parentCategoryIdInput = document.getElementById('parentCategoryId');

document.querySelectorAll('.openAddSubCategoryModalBtn').forEach(function (btn) {
    btn.addEventListener('click', function (e) {
        e.stopPropagation(); // tránh toggle
        const categoryId = this.getAttribute('data-id');
        parentCategoryIdInput.value = categoryId;
        addSubCategoryModal.style.display = 'flex';
    });
});

  closeAddSubCategoryModalBtn.onclick = () => {
    addSubCategoryModal.style.display = 'none';
  };

  window.addEventListener('click', function(e) {
    if (e.target === addSubCategoryModal) {
      addSubCategoryModal.style.display = 'none';
    }
  });

  // Popup sửa danh mục phụ
const previewImg = document.getElementById('editSubPreviewImg');
const editSubCategoryModal = document.getElementById('editSubCategoryModal');
const editSubCategoryForm = document.getElementById('editSubCategoryForm');

// 👉 Sự kiện mở popup sửa
document.querySelectorAll('.sub-category .editBtn').forEach(btn => {
  btn.addEventListener('click', function(e) {
    e.stopPropagation();

    const subCategoryId = this.getAttribute('data-id');
    const subCategoryName = this.getAttribute('data-name');
    const imageUrl = this.getAttribute('data-image');
    const row = this.closest('.sub-category');
    const sort = row.querySelector('div:nth-child(5)').innerText.trim();
    const statusIcon = row.querySelector('div:nth-child(6) i');
    // const status = statusIcon.classList.contains('fa-eye') ? 1 : 0;

    document.getElementById('editSubCategoryName').value = subCategoryName;
    document.getElementById('editSubSort').value = sort
    document.getElementById('editSubStatus').checked = status == 1;
    editSubCategoryForm.action = `/danhmuc/sub-cate/${subCategoryId}`;

    // Gán ảnh cũ vào preview
    previewImg.src = imageUrl;

    editSubCategoryModal.style.display = 'flex';
  });
});

//Xử lý nút đóng popup (đặt ngoài!)
const closeEditSubCategoryModalBtn = document.getElementById('closeEditSubCategoryModalBtn');
closeEditSubCategoryModalBtn.onclick = () => {
  editSubCategoryModal.style.display = 'none';
};

//Đóng khi click ra ngoài
window.addEventListener('click', function(e) {
  if (e.target === editSubCategoryModal) {
    editSubCategoryModal.style.display = 'none';
  }
});
  
  </script>


</main>
<script src="{{ asset('/js/Alerts.js') }}"></script>
@endsection