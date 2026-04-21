<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB as FacadesDB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        FacadesDB::table('posts')->insert([
            [
                'id_user' => 6,
                'id_category' => 1,
                'title' => 'Top 5 TMDT đua trên 20 triệu cấu hình khủng dành cho dân TMDT phong trào',
                'short_description' => 'Với dân chơi TMDT phong trào, việc tìm kiếm một chiếc TMDT đua không chỉ dừng lại ở việc sở hữu phương tiện, mà đó còn là sự đầu tư cho hiệu năng và trải nghiệm tốc độ. Trong phân khúc trên 20 triệu, điều gì khiến những mẫu TMDT đua trở nên nổi bật và đáng giá? Hãy cùng xedap.vn khám phá để tìm ra người bạn đồng hành lý tưởng cho hành trình của bạn!',
                'status' => 1,
                'image' => '/img/post/cuoc-dua-xe-ve-dien-.webp',
                'content' => '1. GIANT SCR 1 Nếu bạn muốn sở hữu một chiếc xe chất lượng cao thì GIANT SCR 1 chính là cái tên xứng đáng để bạn cân nhắc. Mẫu xe này được thiết kế nhằm mang lại hiệu năng tối ưu trên đường bằng đồng thời hỗ trợ xử lý mượt mà trên những đoạn leo dốc nhẹ.    được làm bằng hợp kim nhôm ALUXX SL mang lại trọng lượng nhẹ nhưng vẫn giữ được độ cứng cần thiết để tối ưu hóa sức mạnh cho từng cú đạp. Phuộc trước từ carbon nâng cao khả năng giảm chấn, mang lại cảm giác êm ái và thoải mái trên những cung đường dài.Hệ thống truyền động Shimano Tiagra 2x10 tốc độ giúp bạn kiểm soát mọi nhịp độ đạp, từ những cú nước rút tốc độ cao đến việc duy trì sức bền khi chinh phục đường dài. Bộ phanh vành hiệu suất cao đảm bảo khả năng kiểm soát tốc độ mượt mà và an toàn.GIANT SCR 1 không chỉ là một chiếc TMDT, mà còn là bước đệm giúp bạn tiến xa hơn trong hành trình chinh phục tốc độ. Dù là một tay đua mới hay đã quen thuộc với những cung đường dài, chiếc xe này vẫn luôn là người bạn đồng hành lý tưởng.2. GIANT Contend AR 3 GIANT Contend AR 3 được ví như chiếc dao đa năng dành cho dân chơi TMDT đua. Đây không chỉ là chiếc TMDT đua thông thường mà còn là người bạn đồng hành hoàn hảo trên mọi cung đường.Khung xe hợp kim nhôm ALUXX-Grade kết hợp với thiết kế khung dạng Compact Road Geometry giúp tối ưu hóa tư thế người lái. Bánh xe 700C đi kèm lốp Giant S-R3 AC 700x32c giúp bạn di chuyển linh hoạt và ổn định trên mọi địa hình.Điểm nhấn đặc biệt của Contend AR 3 chính là hệ thống phanh đĩa thủy lực Tektro mạnh mẽ, đảm bảo hiệu suất phanh chính xác trong mọi điều kiện thời tiết. Hệ thống truyền động Shimano Sora 2x9 tốc độ giúp bạn dễ dàng điều chỉnh lực đạp để thích ứng với từng điều kiện địa hình. Với thiết kế mạnh mẽ nhưng không kém phần hiện đại, GIANT Contend AR 3 mang lại cảm giác tự tin và phong cách cho mọi tay đua.3. GIANT TCR ADV 2 PRO Compact Khi nói đến những mẫu TMDT đua cao cấp, GIANT TCR ADV 2 PRO Compact chính là đỉnh cao của hiệu năng và thiết kế. Được chế tác dành riêng cho những tay đua nghiêm túc và các cuộc thi đòi hỏi tốc độ cao.Khung xe được làm từ carbon Advanced-Grade Composite với trọng lượng siêu nhẹ nhưng vẫn đảm bảo độ cứng tuyệt đối để tối ưu hóa mọi cú đạp của bạn. Thiết kế khung dạng Compact Road Geometry không chỉ giúp tăng tính ổn định mà còn hỗ trợ người lái duy trì tư thế thoải mái trong suốt chặng đường dài.Hệ thống truyền động Shimano 105 2x11 tốc độ mang lại khả năng chuyển số nhanh, mượt mà và chính xác. Dù bạn đang bứt phá trên những đoạn đường bằng phẳng hay chinh phục những con đèo dốc đứng, TCR ADV 2 PRO luôn hỗ trợ bạn một cách tối ưu nhất.Hệ thống phanh đĩa thủy lực Shimano mang lại hiệu suất phanh vượt trội, giúp bạn tự tin xử lý mọi tình huống bất ngờ. Với những đặc điểm trên, TCR ADV 2 PRO Compact không chỉ là một chiếc TMDT - nó là biểu tượng cho sự quyết tâm và khao khát chinh phục của những tay đua thực thụ.4. GIANT Contend AR 2 Nếu bạn đang tìm kiếm một mẫu TMDT đua không chỉ mạnh mẽ trên đường nhựa mà còn linh hoạt trên các cung đường khó thì GIANT Contend AR 2 chính là lựa chọn hoàn hảo. Khung xe hợp kim nhôm ALUXX-Grade với thiết kế Compact Road Geometry giúp giảm mỏi cơ trong các hành trình dài. Đặc biệt, hệ thống phuộc trước từ carbon Composite giúp hấp thụ xung chấn tốt hơn, mang lại cảm giác êm ái ngay cả khi bạn băng qua các đoạn đường gồ ghề. Hệ thống truyền động Shimano Tiagra 2x10 tốc độ cho phép bạn điều chỉnh linh hoạt ở cả những đoạn leo dốc căng thẳng lẫn các cú nước rút đầy tốc độ.Điểm nhấn đặc biệt của Contend AR 2 là hệ thống phanh đĩa thủy lực Shimano, đảm bảo an toàn tối đa khi dừng xe ngay cả trong điều kiện thời tiết khắc nghiệt. Về màu sắc tối giản nhưng tinh tế khiến Contend AR 2 không chỉ là công cụ chinh phục các cuộc đua mà còn là cách thể hiện phong cách đẳng cấp của người sở hữu.5. GIANT TCR ADV 1 PRO Compact Với những tay đua phong trào nghiêm túc và đam mê tốc độ, GIANT TCR ADV 1 PRO Compact chính là sự lựa chọn lý tưởng. Đây không chỉ là một chiếc TMDT, mà còn là vũ khí tối thượng giúp bạn thống trị các đường đua với sự tự tin tuyệt đối.Khung xe được chế tác từ carbon Advanced-Grade Composite mang lại trọng lượng siêu nhẹ và khả năng khí động học vượt trội. Điều này giúp bạn giảm tối đa lực cản gió và tối ưu hóa hiệu suất đạp. Phuộc trước cũng từ carbon giúp bạn cảm thấy thoải mái ngay cả trên những hành trình dài đầy thách thức.Hệ thống truyền động Shimano Ultegra 2x11 tốc độ chính là điểm nhấn nổi bật của TCR ADV 1 PRO Compact. Khả năng chuyển số nhanh và chính xác giúp bạn giữ nhịp độ tốt ngay cả khi tăng tốc hay đối mặt với những đoạn leo dốc khó khăn. Kết hợp với hệ thống phanh đĩa thủy lực Shimano, bạn sẽ luôn cảm thấy an toàn ngay cả trong những tình huống phức tạp.Bánh xe Giant SLR-2 Disc Carbon không chỉ nhẹ mà còn cực kỳ bền, giúp tăng tốc nhanh hơn và duy trì tốc độ ổn định. Thiết kế mạnh mẽ, tối giản nhưng sang trọng, chiếc xe này không chỉ dành cho các tay đua mà còn là niềm kiêu hãnh của bất kỳ ai sở hữu.6. Kết luận Những mẫu TMDT đua trên 20 triệu không chỉ đơn thuần là phương tiện mà còn là công cụ để bạn bứt phá giới hạn bản thân và tận hưởng những hành trình đáng nhớ. Từ sự linh hoạt đa năng của GIANT Contend AR 2 đến hiệu suất đỉnh cao của GIANT TCR ADV 1 PRO Compact, mỗi chiếc xe đều mang lại giá trị vượt trội, xứng đáng với sự đầu tư của bạn.Để hành trình của bạn thêm phần thú vị và đẳng cấp với những mẫu xe này, hãy liên hệ ngay với xedap.vn để nhận được sự tư vấn tận tình và tìm ra người bạn đồng hành hoàn hảo nhất! ',

                'slug' => 'top-5-xe-dap-dua-tren-20-trieu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 6,
                'id_category' => 2,
                'title' => 'Màu xe có ý nghĩa như thế nào và cách chọn TMDT cho hợp Mệnh',
                'short_description' => 'Màu sắc không chỉ là yếu tố thẩm mỹ mà còn ảnh hưởng đến tâm lý và phong thủy, giúp cải thiện vận khí và mang lại sự thoải mái cho người dùng. Vậy màu xe có ý nghĩa gì và làm sao để chọn TMDT hợp mệnh? Hãy cùng xedap.vn tìm hiểu trong bài viết sau đây!',
                'status' => 1,
                'image' => '/img/post/blue-1.png',

                'content' => '1.2. Ý nghĩa của từng màu xe
                Màu đỏ: Biểu tượng của năng lượng, đam mê và sự mạnh mẽ. Đây là màu mang lại động lực và nguồn cảm hứng lớn cho người dùng.
                Màu xanh lá: Gắn liền với sự tươi mới, hài hòa và phát triển. Màu sắc này tạo cảm giác yên bình, giúp cân bằng cảm xúc.
                Màu trắng: Thể hiện sự tinh khiết, minh bạch và hoàn hảo. Đây là màu sắc phổ biến, mang lại cảm giác sang trọng và thịnh vượng.
                Màu đen: Tượng trưng cho quyền lực, sự ổn định và bí ẩn. Màu sắc này phù hợp với những người yêu thích phong cách cá tính và sang trọng.
                2. Cách chọn TMDT hợp mệnh theo Ngũ hành
                2.1. Tổng quan về Ngũ hành và mệnh phong thủy
                Ngũ hành là một trong những khái niệm cơ bản của phong thủy, bao gồm năm yếu tố chính: Kim, Mộc, Thủy, Hỏa, Thổ. Mỗi yếu tố này không chỉ đại diện cho một phần của tự nhiên mà còn ảnh hưởng đến tính cách và vận mệnh của mỗi người.

                Màu sắc được chia thành các nhóm tương sinh và tương khắc, tương ứng với từng hành trong Ngũ hành. Việc chọn màu TMDT dựa trên hành tương sinh với mệnh sẽ giúp tăng cường năng lượng tích cực, mang lại may mắn và sự thoải mái khi sử dụng.

                Dưới đây là mối quan hệ tương sinh trong Ngũ hành:

                Kim sinh Thủy: Kim loại nóng chảy thành dạng lỏng.
                Thủy sinh Mộc: Nước nuôi dưỡng cây cối.
                Mộc sinh Hỏa: Cây cháy sinh ra lửa.
                Hỏa sinh Thổ: Lửa biến mọi vật thành tro bụi, bổ sung cho đất.
                Thổ sinh Kim: Đất đá tạo ra quặng kim loại.
                Dựa vào nguyên lý trên, bạn nên ưu tiên chọn màu sắc thuộc hành tương sinh để tận dụng lợi ích phong thủy khi sử dụng TMDT.

                2.2. Gợi ý màu TMDT cho từng mệnh
                Mệnh Kim: Màu trắng, bạc và vàng ánh kim là những lựa chọn tốt nhất cho người mệnh Kim. Đây là những màu sắc mang lại cảm giác sang trọng, mạnh mẽ và giúp gia tăng vận khí cho người sử dụng.
                Mệnh Mộc: Với người mệnh Mộc, màu xanh lá cây và xanh lục là lựa chọn lý tưởng. Các màu này tượng trưng cho sức sống, sự phát triển và sự hòa hợp với thiên nhiên.
                Mệnh Thủy: Người mệnh Thủy nên chọn xe có màu xanh dương hoặc đen. Những màu sắc này đại diện cho sự uyển chuyển, thông minh và sự kết nối hài hòa với mọi người xung quanh.
                Mệnh Hỏa: Các màu đỏ, cam và hồng phù hợp với mệnh Hỏa, mang lại năng lượng, sự nhiệt huyết và khát vọng chinh phục.
                Mệnh Thổ: Người mệnh Thổ sẽ cảm thấy an toàn và vững chắc hơn với các màu như vàng và nâu đất. Những màu sắc này giúp tăng cường sự ổn định và cảm giác yên bình.
                3. Lưu ý khi chọn TMDT ngoài màu sắc
                Ngoài việc chọn màu sắc TMDT hợp phong thủy, bạn cần cân nhắc thêm các yếu tố khác để đảm bảo chiếc xe vừa phù hợp với nhu cầu, vừa mang lại trải nghiệm thoải mái nhất khi sử dụng. Dưới đây là những lưu ý quan trọng:                Kích thước xe phù hợp với thể trạng: Kích thước xe là yếu tố cần đặc biệt lưu tâm. Nếu kích thước quá lớn hoặc quá nhỏ có thể gây khó khăn khi điều khiển và ảnh hưởng đến sức khỏe lâu dài. Để đảm bảo sự thoải mái, bạn nên chọn xe có kích thước bánh phù hợp với chiều cao của mình.
                Chất lượng và độ bền của xe: Nếu bạn thường xuyên đi đường dài hoặc trên địa hình phức tạp hãy ưu tiên các dòng xe từ thương hiệu uy tín, có khung xe chắc chắn, phanh an toàn và bánh xe bền bỉ. Một chiếc xe chất lượng tốt không chỉ mang lại hiệu suất cao mà còn tiết kiệm chi phí bảo trì trong tương lai.
                Kiểu dáng xe phù hợp với mục đích sử dụng: Nếu bạn thích chinh phục các địa hình gồ ghề, hãy chọn TMDT địa hình (MTB) với thiết kế lốp to và khung xe chắc chắn. Nếu thường xuyên đi đường bằng phẳng hoặc đường trường, TMDT road với trọng lượng nhẹ và bánh xe nhỏ sẽ là lựa chọn tốt nhất. Còn nếu sử dụng xe để di chuyển trong thành phố, các dòng xe hybrid hoặc TMDT phổ thông sẽ phù hợp hơn.
                Cân nhắc sở thích cá nhân: Dù phong thủy là yếu tố quan trọng, bạn vẫn nên ưu tiên sở thích của mình khi chọn TMDT. Một chiếc xe có màu sắc và kiểu dáng phù hợp với gu thẩm mỹ của bạn sẽ mang lại niềm vui và sự hào hứng khi sử dụng, giúp bạn duy trì việc đạp xe thường xuyên hơn.',

                'slug' => 'mau-xe-co-y-nghia-nhu-the-nao',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 6,
                'id_category' => 2,
                'title' => '5 mẫu TMDT thể thao nữ đang được ưa chuộng nhất',
                'short_description' => 'Bạn có biết rằng việc chọn đúng chiếc TMDT không chỉ giúp bạn di chuyển dễ dàng hơn mà còn có thể biến mỗi hành trình thành một trải nghiệm thú vị? Với các chị em yêu thích sự năng động, TMDT thể thao không chỉ là phương tiện mà còn là người bạn đồng hành không thể thiếu. Nhưng giữa hàng loạt lựa chọn, đâu mới thực sự là chiếc xe khiến bạn vừa lòng từ cái nhìn đầu tiên? Đừng lo, xedap.vn sẽ bật mí danh sách top 5 mẫu TMDT thể thao nữ được yêu thích nhất hiện nay. ',
                'status' => 1,
                'image' => '/img/post/cuoc-dua-xe-ve-dien-.webp',
                'content' => 'Bạn có biết rằng việc chọn đúng chiếc TMDT không chỉ giúp bạn di chuyển dễ dàng hơn mà còn có thể biến mỗi hành trình thành một trải nghiệm thú vị? Với các chị em yêu thích sự năng động, TMDT thể thao không chỉ là phương tiện mà còn là người bạn đồng hành không thể thiếu. Nhưng giữa hàng loạt lựa chọn, đâu mới thực sự là chiếc xe khiến bạn vừa lòng từ cái nhìn đầu tiên? Đừng lo, xedap.vn sẽ bật mí danh sách top 5 mẫu TMDT thể thao nữ được yêu thích nhất hiện nay. 

                1. LIV Alight 2 
                LIV Alight 2 không chỉ là một chiếc TMDT mà còn là cách bạn khẳng định cá tính đầy tự tin. Bạn có thể tưởng tượng mình như đang lướt đi giữa phố phường với phong thái nhẹ nhàng nhưng không kém phần mạnh mẽ. 

                Sản phẩm này được thiết kế với khung hợp kim nhôm ALUXX-Grade, nhẹ nhàng nhưng vô cùng chắc chắn. Đây không chỉ là một chiếc xe mà còn là cách bạn thể hiện sự hiện đại và năng động. Bánh xe 700C cùng lốp Giant S-X3 giúp bạn tự tin vượt qua mọi bề mặt đường, từ phố phường tấp nập đến những cung đường nhẹ nhàng ngoài đô thị.

                Hệ thống truyền động Shimano Altus 2x8 tốc độ là một điểm nhấn không thể bỏ qua, giúp bạn dễ dàng điều chỉnh tốc độ theo ý muốn - tăng tốc để đến kịp buổi hẹn café hay thong dong khi đi dạo công viên. Bên cạnh đó, màu sắc trẻ trung của LIV Alight 2 sẽ khiến bạn yêu ngay từ lần đầu chạm mắt.',

                'slug' => '-mau-xe-dap-the-thao-nu-dang-duoc-ua-chuong-nhat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 6,
                'id_category' => 3,
                'title' => 'Nên mua TMDT thể thao của thương hiệu nào là TỐT - BỀN - CHẤT LƯỢNG nhất?',
                'short_description' => 'TMDT thể thao không chỉ là phương tiện di chuyển mà còn là công cụ giúp rèn luyện sức khỏe và tạo dựng lối sống năng động. Với học sinh, một chiếc TMDT phù hợp có thể trở thành người bạn đồng hành tuyệt vời trong cả việc học tập lẫn vui chơi. Nhưng để chọn được mẫu TMDT vừa chất lượng, vừa phù hợp, không phải ai cũng biết cách. Trong bài viết này, xedap.vn sẽ giới thiệu 5 mẫu TMDT thể thao bán chạy nhất hiện nay dành cho học sinh, giúp bạn dễ dàng tìm thấy lựa chọn tốt nhất.',
                'status' => 1,
                'image' => '/img/post/blue-1_2.png',
                'content' => '1. GIANT 
                Giant là một trong những thương hiệu TMDT thể thao hàng đầu thế giới được thành lập tại Đài Loan từ năm 1972. Với bề dày kinh nghiệm trong quá trình hoạt động, Giant luôn được biết đến như một người tiên phong trong ngành công nghiệp TMDT toàn cầu. Các sản phẩm của thương hiệu này không chỉ nổi bật với chất lượng vượt trội mà còn sở hữu thiết kế tinh tế, phù hợp cho cả người mới bắt đầu lẫn những tay lái chuyên nghiệp.

                Điểm đặc biệt của Giant nằm ở việc áp dụng công nghệ tiên tiến vào sản xuất. Khung xe của Giant được chế tạo từ hợp kim nhôm ALUXX độc quyền, mang lại sự bền bỉ vượt trội nhưng vẫn đảm bảo trọng lượng nhẹ. Điều này giúp xe hoạt động linh hoạt trên nhiều dạng địa hình, từ đường phố đô thị đến những cung đường dốc và gồ ghề. Bên cạnh đó, Giant còn sử dụng hệ thống truyền động chất lượng cao từ Shimano và SRAM, đảm bảo hiệu suất vận hành mượt mà, tăng trải nghiệm tối ưu cho người sử dụng.

                Không chỉ có chất lượng, Giant còn ghi điểm với sự đa dạng trong các dòng sản phẩm. Từ xe địa hình mạnh mẽ, TMDT đường trường nhanh nhạy đến xe touring linh hoạt, Giant luôn có những lựa chọn phù hợp với mọi nhu cầu. Đây chính là lý do thương hiệu này được nhiều khách hàng yêu thích và tin dùng trên toàn thế giới.',

                'slug' => 'nen-mua-xe-dap-the-thao-cua-thuong-hieu-nao-la-tot-ben-chat-luong-nha',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 6,
                'id_category' => 2,
                'title' => 'Rất nhiều người không ngờ Kích cỡ TMDT lại quan trọng đến như vậy và cách chọn kích cỡ xe',
                'short_description' => 'Bạn có biết rằng việc chọn sai kích cỡ TMDT có thể biến những chuyến đi thú vị thành trải nghiệm đau nhức và khó chịu? Kích cỡ TMDT không chỉ ảnh hưởng đến hiệu suất mà còn tác động đến sức khỏe lâu dài của người sử dụng. Để tối ưu hóa sự thoải mái và hiệu quả, việc hiểu rõ tầm quan trọng của kích cỡ xe và cách chọn xe phù hợp là điều mà bất kỳ biker cũng không nên bỏ qua.',
                'status' => 1,
                'image' => '/img/post/unnamed.png',
                'content' => '',
                'slug' => 'rat-nhieu-nguoi-khong-ngo-kich-co-cua-xe-dap-lai-quan-trong-den-nhu-vay-va-cach-cho-kich-co-xe',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 6,
                'id_category' => 2,
                'title' => 'Có Nên Cho Bé Đi TMDT Thăng Bằng Trước Khi Đạp Xe',
                'short_description' => 'Có nên cho các bé đi TMDT thăng bằng trước khi đi TMDT trẻ em là thắc mắc của nhiều bậc phụ huynh. Vậy TMDT thăng bằng là gì? Nên sử dụng TMDT thăng bằng nào? Tất cả câu trả lời sẽ được giải đáp trong bài viết sau đây!',
                'status' => 1,
                'image' => '/img/post/nhung-loi-ich-cua-viec-dap-xe-doi-voi-tre-em-1.jpg',
                'content' => '',
                'slug' => 'co-nen-cho-be-di-xe-dap-thang-bang-truoc-khi-dap-xe',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'id_user' => 6,
                'id_category' => 2,
                'title' => 'Vì sao TMDT kêu cạch cạch và mẹo khắc phục đơn giản',
                'short_description' => 'TMDT kêu cạch cạch vừa gây cảm giác khó chịu vừa dễ làm giảm tuổi thọ của xe. Vậy đâu là nguyên nhân gây ra lỗi và cách khắc phục như thế nào? Xem ngay bài viết dưới đây để làm rõ vấn đề này nhé!',
                'status' => 1,
                'image' => '/img/post/xe-dap-keu-lach-cach-2.jpg',
                'content' => '',
                'slug' => 'vi-sao-xe-dap-keu-cach-cach-va-meo-khac-phuc-don-gian',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'id_user' => 6,
                'id_category' => 2,
                'title' => 'Khung TMDT làm bằng gì? 5 vật liệu được sử dụng phổ biến',
                'short_description' => 'Chất liệu của khung TMDT là yếu tố quyết định đến độ bền cũng như trải nghiệm khi đạp xe. Như vậy, khung TMDT làm bằng vật liệu gì? Cùng Xedap.vn tìm hiểu bài viết dưới đây để nắm rõ vật liệu tạo nên khung TMDT và ưu - nhược điểm của từng loại!',
                'status' => 1,
                'image' => '/img/post/khung-xe-dap-lam-bang-gi-2.jpg',
                'content' => '',
                'slug' => 'khung-xe-dap-lam-bang-gi-5-vat-lieu-duoc-su-dung-pho-bien',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
