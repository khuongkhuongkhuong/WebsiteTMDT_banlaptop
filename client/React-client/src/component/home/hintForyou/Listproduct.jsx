import { memo } from "react";
import CardLoading from "../../shared/CardLoading";
import ProductCard from "../../shared/ProductCard";
import { useFetch } from "../../../hook/useFeach";
import { fetchProductHotLimitFour } from "../../../api/home";
function Listproduct({ dataaos }) {
  const { fetchedData } = useFetch(fetchProductHotLimitFour, []);

  return (
    <>
      {!fetchedData ? (
        <>
          <CardLoading />
          <CardLoading />
          <CardLoading />
          <CardLoading />
        </>
      ) : (
        <>
          {fetchedData.map((item, index) => (
            <ProductCard
              key={item.id}
              product={item}
              delay={index}
              dataaos={dataaos}
            />
          ))}
        </>
      )}
    </>
  );
}

export default memo(Listproduct);
