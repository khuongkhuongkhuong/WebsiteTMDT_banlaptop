import { fetchPostsBaiviet } from "../../../api/home";
import { useFetch } from "../../../hook/useFeach";
import CardNews from "../../shared/CardNews";
import UIGrid from "../../shared/UIGrid";

export default function NewsList(params) {
  const { fetchedData } = useFetch(fetchPostsBaiviet, []);
  return (
    <UIGrid>
      {fetchedData?.data?.length > 0 &&
        fetchedData?.data
          .slice(0, 8)
          .map((item, index) => (
            <CardNews
              key={item.id}
              item={item}
              delay={index}
              dataaos="fade-up-left"
            />
          ))}
    </UIGrid>
  );
}
