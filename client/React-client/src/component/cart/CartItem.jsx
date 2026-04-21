import { useEffect, useState } from "react";
import { useDispatch } from "react-redux";
import { cartAction } from "../../store";
import { FaRegTrashAlt } from "react-icons/fa";
import { NavLink } from "react-router-dom";

export default function CartItem({ item, cartQuantityMap }) {
  const [quantitySate, setQuantity] = useState(cartQuantityMap);
  const dispatch = useDispatch();

  const handleDecrease = () => {
    if (quantitySate > 1) {
      setQuantity(quantitySate - 1);
    }
  };

  const handleIncrease = () => {
    setQuantity(quantitySate + 1);
  };

  useEffect(() => {
    dispatch(
      cartAction.UPDATE_CART({
        id: item.id,
        sl: quantitySate,
      }),
    );
  }, [quantitySate]);

  function hanldeDelete(id) {
    dispatch(cartAction.DELETE_CART(id));
  }

  return (
    <>
      <div
        className="gridColTable border-b-2 border-primary py-2 text-xs sm:items-center md:text-sm xl:text-base"
        key={item.id}
      >
        <div className="flex sm:space-x-2 xl:space-x-4">
          <img
            src={`${import.meta.env.VITE_ENDPOINT + item?.image} `}
            alt={item?.product?.name}
            className="h-20 w-20 xl:h-28 xl:w-28"
          />

          <div className="flex flex-col justify-around">
            <h6 className="leading-5">
              <NavLink
                className="lowercase first-letter:uppercase"
                to={`/chi-tiet?sp=${item.product.slug}`}
              >
                {item?.product?.name || "Không có tên"} ({item?.option})
              </NavLink>
            </h6>
            {/* btn xoa */}
            <button
              className="mt-2 hidden w-10 text-primary sm:block"
              onClick={() => hanldeDelete(item.id)}
            >
              <FaRegTrashAlt className="text-sm xl:text-lg" />
            </button>
            {/*  */}
          </div>
        </div>

        {/*  */}
        <div className="flex items-center justify-between pt-2 sm:block sm:pt-0 sm:text-center">
          {item.product?.active_discount ? (
            <div className="animate-pulse text-xs font-bold text-red-600">
              <p>
                <span className="pr-2">Đã giảm</span>
                {item.product?.active_discount.value}%
              </p>
              <p>
                {Number(
                  item.price -
                    item.price * (item.product?.active_discount.value / 100),
                ).toLocaleString()}
                đ
              </p>
            </div>
          ) : (
            <p>{Number(item.price).toLocaleString()}</p>
          )}
          <div className="ml-10 inline-block sm:hidden sm:text-center">
            {/* so luong */}

            <button
              onClick={handleDecrease}
              className="p-1 text-lg font-bold text-black disabled:cursor-not-allowed disabled:text-gray-400 xl:p-4 xl:text-xl"
              disabled={quantitySate === 1}
            >
              −
            </button>
            <span className="text-base font-medium xl:text-lg">
              {quantitySate}
            </span>
            <button
              onClick={handleIncrease}
              className="p-1 text-lg font-bold text-primary hover:text-black disabled:cursor-not-allowed disabled:text-gray-400 xl:p-4 xl:text-xl"
              disabled={quantitySate === item.stock}
            >
              +
            </button>
            {/* so luong */}
          </div>
        </div>
        {/*  */}
        <div className="hidden text-center sm:block">
          {/* so luong */}

          <button
            onClick={handleDecrease}
            className="p-2 text-lg font-bold text-black disabled:cursor-not-allowed disabled:text-gray-400 xl:p-4 xl:text-xl"
            disabled={quantitySate === 1}
          >
            −
          </button>
          <span className="text-base font-medium xl:text-lg">
            {quantitySate}
          </span>
          <button
            onClick={handleIncrease}
            className="p-2 text-lg font-bold text-primary hover:text-black disabled:cursor-not-allowed disabled:text-gray-400 xl:p-4 xl:text-xl"
            disabled={quantitySate === item.stock}
          >
            +
          </button>
          {/* so luong */}
        </div>

        <div className="sm:text-center">
          <span className="inline-block pr-2 font-medium sm:hidden">
            Thành tiền :
          </span>
          {item.product?.active_discount
            ? Number(
                (item.price -
                  item.price * (item.product?.active_discount.value / 100)) *
                  quantitySate,
              ).toLocaleString()
            : Number(item.price * quantitySate).toLocaleString()}
          đ{/* btn xoa */}
          <button
            className="ml-16 inline-block w-10 text-primary sm:hidden"
            onClick={() => hanldeDelete(item.id)}
          >
            <FaRegTrashAlt className="text-sm xl:text-lg" />
          </button>
        </div>
      </div>
    </>
  );
}
