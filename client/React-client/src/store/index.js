import { configureStore, createSlice } from "@reduxjs/toolkit";
import favoriteReducer from "./favoriteSlice";
import loadingReducer from "./loadingSlice";
//1 tao giá trị bản đầu
const initialCart = JSON.parse(localStorage.getItem("xe_dap_cart")) || [];
const initialAuth = { popUp: false };

//2 taọ slice
const initialPopup = { popUp: false, payload: [] };

//2 taọ slice
const popupSlice = createSlice({
  name: "popup",
  initialState: initialPopup,

  reducers: {
    SHOW_POPUP(state, actions) {
      state.popUp = true;
      state.payload = actions.payload; //Lưu dữ liệu từ action vào stat
    },
    HIDDEN_POPUP(state) {
      state.popUp = false;
      state.payload = [];
    },
  },
});

const cartSlice = createSlice({
  name: "xe_dap_cart",
  initialState: initialCart,
  reducers: {
    ADD_CART(state, actions) {
      const { id, sl } = actions.payload;

      // Tìm sản phẩm trong giỏ hàng
      const existingItem = state.find((item) => item.id === id);

      let newState;

      if (existingItem) {
        // Nếu sản phẩm đã có, cập nhật số lượng
        newState = state.map((item) =>
          item.id === id ? { ...item, sl: item.sl + sl } : item,
        );
      } else {
        // Nếu chưa có, thêm sản phẩm mới vào giỏ hàng
        newState = [...state, { id, sl }];
      }

      // Cập nhật localStorage (chỉ ghi khi có thay đổi)
      localStorage.setItem("xe_dap_cart", JSON.stringify(newState));

      return newState; // Trả về state mới để Redux nhận diện thay đổi
    },

    UPDATE_CART(state, actions) {
      const index = state.findIndex((item) => item.id === actions.payload.id);
      state[index].sl = actions.payload.sl;
      localStorage.setItem("xe_dap_cart", JSON.stringify(state));

      // return [...state, actions.payload];
    },

    DELETE_CART(state, actions) {
      const index = state.findIndex((item) => item.id === actions.payload);
      if (index !== -1) {
        state.splice(index, 1);
      }
      localStorage.setItem("xe_dap_cart", JSON.stringify(state));
    },

    CLEAR_CART(state) {
      state.length = 0; // Xóa toàn bộ giỏ hàng
      localStorage.setItem("xe_dap_cart", JSON.stringify([])); // Cập nhật localStorage
    },
  },
});

const popupAuthSlice = createSlice({
  name: "popupAuth",
  initialState: initialAuth,
  reducers: {
    SHOW_POPUP(state, actions) {
      state.popUp = true;
    },
    HIDDEN_POPUP(state) {
      state.popUp = false;
    },
  },
});

// 3tao store
const store = configureStore({
  reducer: {
    popupDetail: popupSlice.reducer,
    popupAuth: popupAuthSlice.reducer,
    cart: cartSlice.reducer,
    favorites: favoriteReducer,
    loading: loadingReducer,
  },
});

export const popupDetailAction = popupSlice.actions; // dung DISPATH
export const popupAuthAction = popupAuthSlice.actions;
export const cartAction = cartSlice.actions;

export default store; // USESELECTOR LAY DL

// Actions: Các action creators để bạn có thể dispatch các hành động.
// Reducer: Một hàm reducer để quản lý state dựa trên các hành động.
