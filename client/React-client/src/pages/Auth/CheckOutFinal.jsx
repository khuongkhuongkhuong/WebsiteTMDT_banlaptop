import { useEffect } from "react";
import { useNavigate, useParams } from "react-router-dom";
import { useFetch } from "../../hook/useFeach";
import { getToken, getUser } from "../../util/auth";
import LoadingThanhToan from "../../component/loadingThanhToan/LoadingThanhToan";
import { checkToken } from "../../api/user";
import { getOrderByid } from "../../api/order";

export default function CheckOutFinal() {
  const navigate = useNavigate();
  const { id } = useParams();
  const Token = getToken();
  const user = getUser();

  useEffect(() => {
    async function kt() {
      const { valid } = await checkToken();
      if (!valid) {
        navigate("/");
      }
    }
    if (!Token) {
      navigate("/");
      return;
    } else {
      kt();
    }
  }, [Token]);

  const { isFetching, fetchedData } = useFetch(
    () => getOrderByid(id, Token),
    [],
  );

  useEffect(() => {
    if (!isFetching && Object.keys(fetchedData).length > 0) {
      if (user.id != fetchedData.id_user) {
        navigate("/");
      }

      if (fetchedData.id_payment === 1) {
        navigate("/");
      }
    }
  }, [fetchedData]);

  useEffect(() => {
    document.title = `Hoàn tất thanh toán | ${import.meta.env.VITE_WEBSITE_NAME}`;
  }, []);

  return (
    <>
      <section className="py-10">
        <div className="container">
          <h1 className="text-xl font-semibold md:text-2xl">
            Thanh Toán Đơn hàng
          </h1>
          <div
            data-aos="zoom-in"
            data-aos-delay="400"
            className="flex flex-col items-center justify-center pb-8"
          >
            <h4>Bạn đã đặt hàng thành công</h4>
            {!isFetching ? (
              Object.keys(fetchedData).length > 0 ? (
                <>
                  <LoadingThanhToan idDonHang={fetchedData.id} />
                  <img
                    src={`https://img.vietqr.io/image/${fetchedData.payment.bank}-${fetchedData.payment.bank_number}-compact2.png?amount=${fetchedData.total_price}&addInfo=MDH:${fetchedData.id}&accountName=NGUYEN LE ANH KHOA`}
                    alt="QR Code"
                    className="w-96"
                  />
                </>
              ) : (
                <p>Không có dữ liệu</p>
              )
            ) : (
              <p>Đang tải...</p>
            )}
          </div>
        </div>
      </section>
    </>
  );
}
