<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'id' => 1,
                'id_category' => 1,
                'id_brand' => 17,
                'id_discount' => 1,
                'slug' => 'xe-dap-the-thao-touring-liv-alight-3-dics-1',
                'description' => 'TMDT Đường Phố Touring LIV Alight 3 Disc - Phanh Đĩa, Bánh 700C - 2025
                    Bạn đang tìm kiếm một chiếc TMDT thể thao vừa mạnh mẽ, bền bỉ, lại mang thiết kế tinh tế dành riêng cho nữ giới? LIV Alight 3 Disc 2025 chính là lựa chọn hoàn hảo dành cho bạn. Đây không chỉ là một phương tiện di chuyển, mà còn là tuyên ngôn cá tính của phái nữ, giúp bạn tự tin chinh phục những con đường hàng ngày, từ đi làm, đi học, cho đến tập luyện thể thao hay khám phá những trải nghiệm mới.
                    1. Thiết kế hợp kim nhôm nhẹ, khung xe hiện đại dành cho bạn gái
                    LIV Alight 3 Disc 2025 là mẫu TMDT touring đường phố được thiết kế dành riêng cho các bạn nữ năng động yêu thích di chuyển linh hoạt, tập luyện thể thao và khám phá thành phố. Với màu sắc Pale Olive trang nhã, khung xe thanh thoát và những đường nét tinh tế, chiếc xe này không chỉ là phương tiện di chuyển mà còn là biểu tượng của phong cách và sự năng động.
                    Khung xe được chế tạo từ hợp kim nhôm ALUXX-grade nhẹ và bền, giúp giảm trọng lượng mà vẫn đảm bảo độ cứng cáp. Thiết kế khung có độ thấp vừa phải, giúp việc lên xuống xe trở nên dễ dàng hơn, phù hợp với người dùng có vóc dáng nhỏ nhắn.
                    2. Bộ truyền động Shimano mang lại hiệu suất vận hành ấn tượng
                    LIV Alight 3 Disc 2025 được trang bị bộ truyền động Shimano Altus 2×8, cung cấp 16 tốc độ linh hoạt, giúp các chị em dễ dàng di chuyển trong nhiều điều kiện đường xá khác nhau. Dù là leo dốc, băng qua phố đông hay tăng tốc trên đường thẳng, hệ thống chuyển số mượt mà sẽ mang lại cảm giác lái nhẹ nhàng và hiệu quả.
                    Bên cạnh đó, lốp Giant S-X3 có kích thước 700x38c với khả năng chống đâm thủng, đảm bảo phái đẹp luôn giữ được tay lái ổn định khi di chuyển trên cả đường nhựa lẫn những con đường gồ ghề. Cùng với đó, vành xe Giant GX Disc wheelset chắc chắn, giúp xe có độ bền cao và chịu được những tác động mạnh từ địa hình.
                    3. Hệ thống phanh đĩa an toàn tuyệt đối cho phái yếu
                    Một trong những điểm mạnh của LIV Alight 3 Disc 2025 chính là hệ thống phanh đĩa thủy lực Tektro HD-T275 (trước) và HD-R280 (sau). Công nghệ phanh thủy lực mang đến khả năng kiểm soát tốc độ vượt trội, giúp bạn an toàn hơn khi di chuyển trên những đoạn đường dốc hoặc khi thời tiết xấu. Dù là trời mưa hay đường trơn trượt, hệ thống phanh vẫn đảm bảo phản hồi nhanh và lực bóp nhẹ nhàng.
                    4. Trải nghiệm êm ái cho tay lái nữ
                    Ghi đông Giant Sport AT với thiết kế 25.4mm và độ nâng 20mm giúp người lái có tư thế thoải mái, giảm áp lực lên vai và cổ tay trong những hành trình dài. Yên xe Liv ErgoMax được thiết kế phù hợp với cấu trúc cơ thể nữ giới, mang lại sự êm ái và dễ chịu ngay cả khi đạp xe trong thời gian dài.
                    Cốt yên Giant D-Fuse bằng hợp kim nhôm giúp giảm rung động từ mặt đường, mang lại sự ổn định và thoải mái hơn trong suốt quá trình di chuyển. Điều này đặc biệt hữu ích khi bạn phải di chuyển trên các đoạn đường sỏi hoặc những con phố không bằng phẳng. Xe còn được trang bị bàn đạp GIANT Urban Fitness, phù hợp với nhiều loại giày dép và tạo cảm giác chắc chắn khi đạp. Khung xe cũng được tích hợp giá đỡ, giúp bạn dễ dàng gắn thêm baga hoặc giỏ xe để chở đồ tiện lợi.
                    LIV Alight 3 Disc 2025 là sự kết hợp hoàn hảo giữa thiết kế thanh lịch, hiệu suất mạnh mẽ và sự thoải mái tối đa.
                    Đây là mẫu xe lý tưởng dành cho những người phụ nữ yêu thích sự chủ động, mong muốn trải nghiệm một chiếc TMDT đa năng, bền bỉ và phù hợp với mọi nhu cầu di chuyển.',
                'hot_product' => 0,
                'name' => 'TMDT Thể Thao Touring LIV Alight 3 Disc - Phanh Đĩa, Bánh 700C - 2025',
                'status' => 1,
                'views' => 10,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'id_category' => 1,
                'id_brand' => 17,
                'id_discount' => 1,
                'slug' => 'xe-dap-the-thao-touring-liv-alight-4-dics-2',
                'description' => 'TMDT Đường Phố Touring LIV Alight 4 Disc - Phanh Đĩa, Bánh 700C - 2025
                    LIV Alight 4 Disc 2025 không chỉ là một chiếc TMDT đường phố thông thường, mà còn là tuyên ngôn cá tính dành cho những ai yêu thích sự năng động và hiện đại. Với thiết kế khung nhẹ, hệ thống truyền động linh hoạt và phanh đĩa an toàn, mẫu xe này là lựa chọn lý tưởng cho những chuyến đi trong thành phố, dạo chơi cuối tuần hay thậm chí là tập luyện thể dục hàng ngày.
                    1. Thiết kế nổi bật với sắc màu độc đáo trong các dòng xe touring
                    LIV Alight 4 Disc có hai kích cỡ S và XS, phù hợp với nhiều vóc dáng, đặc biệt là người dùng nữ hoặc những ai yêu thích một chiếc xe dễ kiểm soát. Đặc biệt sở hữu combo màu sắc nổi bật hơn hẳn so với các dòng xe touring khác như Bali Bricks - tông cam đất hiếm thấy, giúp bạn trở nên mạnh mẽ và phong cách hơn trên mọi nẻo đường hay tối giản hơn với màu Asphalt Green nhưng vẫn không kém phần sang trọng.
                    Khung xe được làm từ ALUXX-grade aluminum, một loại hợp kim nhôm cao cấp giúp xe có trọng lượng nhẹ nhưng vẫn đảm bảo độ cứng cáp, mang lại cảm giác lái chắc chắn và linh hoạt.
                    Phuộc thép cứng cáp với độ ổn định cao. Không giống nhiều mẫu touring khác sử dụng phuộc hợp kim nhôm hoặc carbon, LIV Alight 4 Disc trang bị phuộc High Tensile Steel, giúp xe ổn định hơn, đặc biệt khi di chuyển trên các con đường gồ ghề hoặc vỉa hè đô thị.
                    2. Lốp GIANT S-X3 êm ái và linh hoạt
                    Xe được trang bị bánh 700C kết hợp với lốp Giant S-X3 700x38C, mang đến những lợi ích vượt trội:
                    Bám đường tốt, giúp xe di chuyển ổn định ngay cả trên bề mặt trơn trượt.
                    Giảm xóc nhẹ nhàng, mang lại trải nghiệm lái xe êm ái hơn.
                    Dễ dàng vượt qua địa hình gồ ghề, phù hợp cho cả đường thành phố lẫn những đoạn đường ngoại ô.
                    Bộ vành Giant GX Disc wheelset, kết hợp với đùm Giant alloy, QR và căm stainless, tạo nên hệ thống bánh xe chắc chắn, đảm bảo độ bền theo thời gian.
                    3. Ghi đông nâng nhẹ, tư thế lái thoải mái
                    Ghi đông Giant Sport AT 25.4mm, 20mm riser: Thiết kế nâng nhẹ giúp tay lái thoải mái, không gây áp lực lên cổ tay và vai khi đạp xe trong thời gian dài.
                    Pô tăng Giant Sport 25.4mm: Hỗ trợ kiểm soát tay lái tốt hơn, mang lại cảm giác vững chắc khi di chuyển qua các đoạn đường đông đúc.
                    Cốt yên Giant D-Fuse alloy 30.9mm: Công nghệ độc quyền của Giant giúp hấp thụ rung chấn tốt hơn, giảm cảm giác tê mỏi khi di chuyển xa.
                    Yên Liv Sport Saddle: Được thiết kế riêng cho dòng xe touring, mang đến sự thoải mái tối đa trong mọi chuyến đi.
                    4. Truyền động Shimano Tourney 1×8, cảm giác lái đơn giản, hiệu quả
                    LIV Alight 4 Disc 2025 sử dụng hệ thống truyền động 1×8 tốc độ với tay đề Shimano Tourney, giúp người dùng dễ dàng chuyển số mà không cần quá nhiều thao tác.

                    Tay đề Shimano Tourney 1×8 – Sang số mượt mà, dễ dàng điều chỉnh tốc độ.
                    Chuyển líp Shimano Tourney – Hoạt động ổn định, bền bỉ.
                    Bộ líp Shimano CS-HG200-8 (12×32T) – Dải số rộng, hỗ trợ tốt khi leo dốc hoặc tăng tốc.
                    Giò đĩa Forged Alloy 40T – Độ bền cao, đảm bảo hiệu suất đạp ổn định.
                    Sên KMC Z8.3 – Chắc chắn, hạn chế giãn sên trong quá trình sử dụng lâu dài.
                    Xe sử dụng phanh đĩa cơ Tektro TKB-172, kết hợp với tay thắng Tektro mechanical, mang đến lực phanh ổn định và đáng tin cậy.
                    Điểm nhấn đáng chú ý của hệ thống 1x8 trên LIV Alight 4 Disc 2025 chính là sự đơn giản và tiện lợi. Người dùng không cần bận tâm đến việc chuyển đĩa trước, từ đó giảm thiểu những thao tác phức tạp khi điều chỉnh tốc độ. Hơn nữa, thiết kế này còn giúp giảm trọng lượng xe, mang lại sự linh hoạt khi di chuyển trong môi trường đô thị. Đặc biệt, hệ thống 1x8 được đánh giá cao về độ bền và khả năng bảo trì dễ dàng, khiến đây trở thành lựa chọn lý tưởng cho những ai tìm kiếm một mẫu xe vừa năng động, vừa bền bỉ để đồng hành trên mọi hành trình.',
                'hot_product' => 0,
                'name' => 'TMDT Thể Thao Touring LIV Alight 4 Disc - Phanh Đĩa, Bánh 700C - 2025',
                'status' => 1,
                'views' => 10,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'id_category' => 1,
                'id_brand' => 4,
                'id_discount' => 1,
                'slug' => 'xe-dap-the-thao-touring-giant-roam-3-3',
                'description' => '
                        TMDT Đường Phố Touring GIANT Roam 3 – Phanh Đĩa, Bánh 700C – 2025
                        GIANT Roam 3 – Phanh Đĩa, Bánh 700C – 2025 là mẫu TMDT touring thế hệ mới, được phát triển để đồng hành cùng người sử dụng chinh phục mọi trải nghiệm, với khung hợp kim nhôm ALUXX cao cấp, hệ thống giảm xóc linh hoạt cùng bộ truyền động Shimano bền bỉ, Roam 3 mang đến cảm giác lái êm ái, ổn định và đầy hứng khởi. Đây chính là lựa chọn lý tưởng dành cho những ai tìm kiếm sự thoải mái, hiệu suất và độ bền trên mọi cung đường.
                        Thiết kế linh hoạt với khung xe hợp kim nhôm ALUXX bền bỉ
                        Được thiết kế dành cho đô thị, đường trường và cả những cung đường địa hình nhẹ, Roam 3 mang đến trải nghiệm lái mượt mà, ổn định và tiện dụng. Với ba kích cỡ: S, M, L, giúp người dùng dễ dàng lựa chọn kích thước phù hợp với thể trạng, tha hồ lựa chọn giữa hai màu sắc đang thịnh hành: Ultra Navy và Shell White, phù hợp với nhiều phong cách.
                        Khung xe được chế tạo từ ALUXX-Grade Aluminum, một loại hợp kim nhôm cao cấp của GIANT. Chất liệu này giúp xe nhẹ nhưng vẫn đảm bảo độ cứng cáp, mang lại khả năng vận hành linh hoạt trên nhiều loại địa hình.
                        Phuộc trước SR Suntour NEX HLO 700C với hành trình 63mm giúp giảm chấn tốt, tạo sự thoải mái ngay cả khi di chuyển trên những con đường gồ ghề.
                        Bánh chuyên dụng Giant CrossCut bám đường tốt
                        Hệ thống bánh xe 700C với lốp Giant CrossCut 700x42C chống đâm thủng, mang lại độ bám đường cao, giảm thiểu nguy cơ thủng lốp và giúp xe vận hành ổn định hơn. Vành xe Giant double wall aluminum chắc chắn, kết hợp với đùm alloy 28h và căm stainless 14g, tạo nên bộ bánh xe bền bỉ, phù hợp với những hành trình dài.
                        Hệ thống điều khiển tối ưu cho một trải nghiệm êm ái
                        Roam 3 sở hữu ghi đông Giant Sport XC 31.8mm giúp người lái dễ dàng kiểm soát hướng đi. Pô tăng Giant Sport 7-degree và cốt yên Giant D-Fuse alloy 350mm mang lại tư thế lái thoải mái, giảm rung chấn, giúp bạn di chuyển lâu mà không mỏi mệt. Yên xe Giant Sport được thiết kế khoa học, hỗ trợ tối đa cho các chuyến đi dài, tạo cảm giác êm ái ngay cả khi di chuyển liên tục.
                        Truyền động Shimano Cues mang dấu ấn mạnh mẽ, bền bỉ

                        Hệ thống truyền động của Roam 3 được trang bị Shimano Cues U4000 2×9-speed, mang lại khả năng sang số mượt mà và linh hoạt trên nhiều địa hình.

                        Tay đề Shimano Cues U4000 giúp chuyển số nhạy và chính xác.
                        Chuyển đĩa Shimano Cues U4010-L và chuyển líp Shimano RD-U3020 giúp tối ưu hóa hiệu suất đạp xe.
                        Bộ líp Shimano CS-LG-300-9 (11x36T) mang lại khả năng leo dốc tốt hơn.
                        Giò đĩa forged alloy 30/46T bền bỉ, giúp người lái dễ dàng đạt tốc độ mong muốn mà không tốn quá nhiều sức.
                        Sên KMC X11 có độ bền cao, đảm bảo hiệu suất truyền động ổn định.
                        Hệ thống phanh đĩa Tektro cao cấp, đảm bảo an toàn trên mọi địa hình

                        Một trong những điểm nổi bật của Roam 3 là hệ thống phanh đĩa thủy lực Tektro TKD-143, giúp kiểm soát tốc độ chính xác, đảm bảo an toàn ngay cả khi di chuyển trên đường trơn trượt hoặc đổ dốc.
                        Tay thắng Tektro TKD-143 được thiết kế vừa vặn, giúp người lái dễ dàng thao tác, mang lại cảm giác phanh mượt mà và hiệu quả.

                        Với thiết kế bền bỉ, linh kiện chất lượng cao và hệ thống truyền động mạnh mẽ, GIANT Roam 3 2025 chắc chắn là người bạn đồng hành lý tưởng cho những chuyến đi dài. Dù là đường phố đô thị, đường trường hay những cung đường gồ ghề nhẹ, mẫu xe này đều mang đến trải nghiệm lái êm ái và ổn định.
                        Bạn đang tìm kiếm một chiếc TMDT touring đáng tin cậy? GIANT Roam 3 – Phanh Đĩa, Bánh 700C – 2025 chính là sự lựa chọn hoàn hảo! Truy cập ngay xedap3s.cloud hoặc liên hệ Hotline 0987654321 để được tư vấn và đặt mua với nhiều ưu đãi hấp dẫn!

                        ',
                'hot_product' => 0,
                'name' => 'TMDT Thể Thao Touring GIANT Roam 3 - Phanh Đĩa, Bánh 700C - 2025',
                'status' => 1,
                'views' => 10,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'id_category' => 1,
                'id_brand' => 4,
                'id_discount' => 1,
                'slug' => 'xe-dap-the-thao-touring-giant-roam-4-4',
                'description' => '
                    TMDT Đường Phố Touring GIANT Roam 4 - Phanh Đĩa, Bánh 700C - 2025
                    Bạn đang tìm kiếm một chiếc xe có thể đồng hành cùng bạn trên mọi cung đường, từ đô thị đến những đoạn đường gồ ghề? GIANT Roam 4 - 2025 chính là sự lựa chọn lý tưởng, là một chiến binh đa dụng giúp bạn chinh phục mọi cung đường. Được thiết kế với sự kết hợp hoàn hảo giữa hiệu suất của TMDT đường phố và khả năng chinh phục địa hình nhẹ của xe touring, Roam 4 mang lại trải nghiệm lái linh hoạt, ổn định và đầy hứng khởi.
                    1. Thiết kế nhôm ALUXX cao cấp, linh hoạt cho mọi nhu cầu
                    Khung xe được chế tạo từ hợp kim nhôm ALUXX cao cấp, mang đến sự cân bằng tối ưu giữa trọng lượng nhẹ và độ bền chắc. Đặc biệt, một trong những điểm khác biệt lớn của GIANT Roam 4 chính là hệ thống phuộc trước SR Suntour NEX HLO với hành trình 63mm. Nhờ đó, xe có khả năng giảm xóc hiệu quả trên các đoạn đường không bằng phẳng, mang lại cảm giác lái êm ái ngay cả khi di chuyển trên địa hình khó. Gam màu đen mạnh mẽ càng làm tăng thêm vẻ ngoài nam tính, hiện đại của xe.
                    2. Hệ thống bánh xe lớn, bền bỉ chinh phục mọi con đường
                    Một trong những điểm nổi bật của GIANT Roam 4 - 2025 chính là bộ bánh xe Giant CrossCut 700x42c với lớp bảo vệ chống đâm thủng giúp tăng khả năng bám đường, chống trơn trượt và mang lại cảm giác lái vững vàng hơn. Kết hợp với vành xe Giant double wall aluminum kết hợp cùng đùm hợp kim 32h đảm bảo độ bền tối đa, chịu được áp lực lớn khi di chuyển trên các địa hình khác nhau.
                    3. Bộ truyền động mạnh mẽ, tối ưu hiệu suất đạp xe
                    Xe được trang bị bộ truyền động Shimano 2x7 tốc độ với tay đề RapidFire Plus, giúp bạn chuyển số nhanh chóng và chính xác. Cụm chuyển đĩa Shimano FD-TY606 và chuyển líp Shimano Tourney hỗ trợ điều chỉnh linh hoạt, phù hợp cho cả những đoạn đường dốc và đường trường. Bộ líp Shimano CS-HG200 12x32 giúp mở rộng dải tốc độ, tối ưu hiệu suất đạp xe.
                    4. Hệ thống phanh đĩa thủy lực, trao quyền kiểm soát tuyệt đối
                    Hệ thống phanh đĩa thủy lực Tektro TKD-143 mang lại lực phanh mạnh mẽ và độ chính xác cao. Ngay cả trong điều kiện trời mưa hay địa hình trơn trượt, bạn vẫn có thể kiểm soát tốc độ dễ dàng. Tay thắng Tektro TKD-173 thiết kế thông minh giúp thao tác trở nên nhẹ nhàng, mang lại cảm giác an toàn tuyệt đối.
                    5. Tối ưu sự thoải mái cho mọi hành trình
                    Không chỉ tập trung vào hiệu suất, GIANT Roam 4 còn được thiết kế để tối ưu sự thoải mái cho người lái. Ghi đông Giant Sport XC 31.8mm mang lại tư thế cầm lái tự nhiên, giảm mỏi tay khi đi đường dài. Yên xe ErgoContact êm ái, kết hợp với cốt yên Giant D-Fuse giúp hấp thụ chấn động tốt hơn, mang đến trải nghiệm lái dễ chịu.
                    Chính vì thế mà GIANT Roam 4 - 2025 không chỉ là một chiếc TMDT đường phố, mà còn là lựa chọn hoàn hảo cho những ai yêu thích khám phá. Sự kết hợp giữa thiết kế chắc chắn, hệ thống phanh an toàn và truyền động linh hoạt giúp xe sẵn sàng cho mọi thử thách. Dù bạn đi làm, tập thể thao hay chinh phục những hành trình dài, GIANT Roam 4 sẽ luôn đồng hành cùng bạn.
                    Hiện nay, mẫu TMDT GIANT Roam 4 - 2025 đang được bày bán tại hệ thống cửa hàng Xedap.vn, với mức giá tốt và vô vàn ưu đãi hấp dẫn. Truy cập ngay website xedap3s.cloud hoặc liên hệ qua số Hotline 0987654321 để được tư vấn và đặt mua sản phẩm.',
                'hot_product' => 0,
                'name' => 'TMDT Thể Thao Touring GIANT Roam 4 - Phanh Đĩa, Bánh 700C - 2025',
                'status' => 1,
                'views' => 10,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'id_category' => 1,
                'id_brand' => 8,
                'id_discount' => 1,
                'slug' => 'xe-dap-the-thao-touring-trinx-free-5',
                'description' => 'Chưa có thông tin mô tả',
                'hot_product' => 0,
                'name' => 'TMDT Thể Thao Touring TRINX Free 2.4 – Phanh Đĩa, Bánh 700C – 2023',
                'status' => 1,
                'views' => 10,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'id_category' => 1,
                'id_brand' => 18,
                'id_discount' => 1,
                'slug' => 'xe-dap-the-thao-touring-jeep-charming-6',
                'description' => 'TMDT Đường Phố Touring JEEP Freedom LX-66 Disc – Phanh Đĩa, Bánh 700C

                    JEEP Freedom LX-66 Disc – Phanh Đĩa, Bánh 700C là một mẫu TMDT đường phố touring hiện đại, mang lại sự kết hợp hoàn hảo giữa thiết kế bền bỉ, tính năng linh hoạt và hiệu suất vượt trội. Với cấu trúc chắc chắn và tính năng vận hành mượt mà, chiếc xe này đáp ứng tốt nhu cầu di chuyển hằng ngày, dạo chơi hoặc tham gia các hành trình dài.
                    1. Thiết kế hiện đại và màu sắc thanh lịch
                    Kích cỡ:
                    Xe có kích thước One size (700C), phù hợp với đa dạng người dùng. Với khả năng điều chỉnh linh hoạt các bộ phận như yên và ghi đông, chiếc xe mang lại sự thoải mái tối đa cho người lái.
                    Màu sắc:
                    Xe có hai tùy chọn màu sắc Đen và Trắng, mang đến vẻ ngoài thanh lịch, hiện đại và dễ dàng phù hợp với phong cách cá nhân của người sử dụng.
                    2. Khung xe Jeep ALU bền nhẹ
                    Chất liệu khung:
                    Khung xe được chế tạo từ hợp kim nhôm Jeep ALU, giúp giảm trọng lượng tổng thể của xe nhưng vẫn đảm bảo độ bền và khả năng chịu lực tốt. Thiết kế này cho phép xe vận hành linh hoạt, dễ dàng điều khiển trên mọi loại địa hình.
                    Phuộc trước Jeep STL:
                    Phuộc trước bằng thép chịu lực cao (STL) giúp giảm chấn hiệu quả, mang lại trải nghiệm lái êm ái ngay cả khi đi qua các đoạn đường không bằng phẳng.
                    3. Hệ thống bánh xe và lốp chất lượng
                    Vành xe ALU Double Wall:
                    Vành nhôm hai lớp với 36 lỗ (36H) tăng cường độ cứng và khả năng chịu tải, đảm bảo độ ổn định khi di chuyển trên những cung đường dài.
                    Lốp Jeep 700x32C:
                    Lốp xe được thiết kế với kích thước 700C, giúp xe duy trì sự cân bằng và tăng độ bám đường. Lốp có độ bền cao, phù hợp cho cả đường phố bằng phẳng lẫn các đoạn đường không bằng phẳng.
                    4. Hệ thống điều khiển linh hoạt
                    Ghi đông Jeep STL:
                    Ghi đông rộng 640mm mang lại khả năng kiểm soát tốt, giúp người lái dễ dàng chuyển hướng hoặc điều khiển xe trong môi trường đô thị đông đúc.
                    Pô tăng Jeep ALU:
                    Pô tăng kích thước 31.8x80mm được làm từ hợp kim nhôm bền nhẹ, hỗ trợ điều chỉnh tư thế lái thoải mái và giảm áp lực lên cơ vai, cổ trong hành trình dài.
                    Cốt yên Jeep STL:
                    Cốt yên 30.4x300mm, được chế tạo từ thép chắc chắn, mang lại sự ổn định và giảm thiểu rung lắc khi di chuyển qua các bề mặt không bằng phẳng.
                    Yên xe Jeep:
                    Yên xe thiết kế rộng, êm ái, mang lại cảm giác thoải mái trong các chuyến đi dài hoặc sử dụng hằng ngày.
                    
                    5. Hệ thống truyền động 24 tốc độ
                    Tay đề Jeep:
                    Tay đề 24 tốc độ giúp người lái chuyển số nhanh chóng và linh hoạt, dễ dàng điều chỉnh tốc độ phù hợp với từng điều kiện đường.
                    Chuyển đĩa Jeep (3 tốc độ) và chuyển líp Jeep (8 tốc độ):
                    Hệ thống truyền động này hỗ trợ người lái di chuyển nhẹ nhàng trên đường bằng và leo dốc dễ dàng, đảm bảo hiệu suất vận hành tối ưu.
                    Bộ líp 13-28T:
                    Bộ líp 8 tốc độ cung cấp dải số rộng, phù hợp với nhu cầu di chuyển trong môi trường đô thị và đường trường.
                    Giò đĩa Jeep STL 22/32/42x170mm:
                    Giò đĩa làm từ thép chắc chắn, mang lại lực đạp mạnh mẽ và khả năng vận hành bền bỉ.
                    Sên xe 1/2x3/32 8 Speed:
                    Sên xe chất lượng cao đảm bảo khả năng truyền động mượt mà và độ bền lâu dài.
                    6. Hệ thống phanh cơ Jeep Mechanical Disc
                    Phanh cơ Jeep Mechanical Disc:
                    Hệ thống phanh đĩa cơ giúp tăng khả năng kiểm soát và lực phanh mạnh mẽ, đảm bảo an toàn tối đa trong mọi điều kiện thời tiết, đặc biệt là trên các bề mặt đường ướt hoặc trơn.
                    7. Trọng lượng nhẹ và vận hành ổn định

                    Trọng lượng:
                    Với khung nhôm nhẹ và thiết kế tối ưu, JEEP Freedom LX-66 Disc không chỉ dễ dàng điều khiển mà còn mang lại sự linh hoạt và thoải mái trong suốt hành trình.
                    
                    Kết luận: Lựa chọn lý tưởng cho đô thị và đường trường
                    JEEP Freedom LX-66 Disc – Phanh Đĩa, Bánh 700C là mẫu TMDT hoàn hảo dành cho những ai tìm kiếm một phương tiện di chuyển linh hoạt, an toàn và phong cách. Với thiết kế khung nhôm bền nhẹ, hệ thống truyền động 24 tốc độ, phanh đĩa cơ mạnh mẽ và các linh kiện chất lượng cao, mẫu xe này phù hợp cho cả nhu cầu đi lại hàng ngày và những chuyến đi xa.',
                'hot_product' => 0,
                'name' => 'TMDT Thể Thao Touring JEEP Charming LX-08 Disc, Phanh Đĩa – Bánh 700C',
                'status' => 1,
                'views' => 10,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'id_category' => 1,
                'id_brand' => 4,
                'id_discount' => 2,
                'slug' => 'xe-dap-the-thao-touring-giant-escape-1-disc-2024-7',
                'description' => '
                    TMDT đường phố Giant Escape 1 Disc – 2024 là một trong những mẫu TMDT đường phố hàng đầu từ thương hiệu uy tín Giant. Với thiết kế tối giản nhưng sang trọng và sự linh hoạt trong vận hành, chiếc xe này chắc chắn sẽ làm hài lòng người dùng ở mọi cấp độ, từ các chuyến đi hàng ngày đến những cuộc hành trình đường dài.
                    Khung sườn hợp kim nhôm ALUXX siêu nhẹ và bền
                    Escape 1 Disc được xây dựng trên khung nhôm ALUXX siêu nhẹ, giúp giảm trọng lượng tổng thể của xe mà vẫn đảm bảo độ bền và ổn định. Thiết kế khung mạnh mẽ nhưng gọn nhẹ giúp người lái dễ dàng kiểm soát và di chuyển linh hoạt trong thành phố đông đúc hay các con đường ngoại ô.
                    Hiệu suất tốt cùng bộ truyền động Shimano CUES
                    Với hệ thống truyền động Shimano 2×9 tốc độ, Escape 1 Disc mang lại sự linh hoạt và hiệu suất vượt trội trên mọi loại địa hình. Bánh xe 700C kết hợp với lốp chất lượng cao tạo nên sự ổn định và kiểm soát tốt, đồng thời giúp người lái di chuyển mạnh mẽ và mượt mà trên mọi bề mặt đường phố.
                    Tiện ích và an toàn:
                    Giant Escape 1 Disc – 2024 được trang bị hệ thống phanh đĩa Tektro giúp người lái dễ dàng kiểm soát và dừng xe an toàn trong mọi tình huống. Bên cạnh đó, xe còn được trang bị các phụ kiện như baga trước và sau, đèn chiếu sáng, giúp người dùng thoải mái vận chuyển hàng hóa và điều khiển xe vào buổi tối.
                    Với sự kết hợp hoàn hảo giữa thiết kế thông minh, hiệu suất ưu việt và tính tiện ích, Giant Escape 1 Disc không chỉ là một chiếc TMDT đường phố, mà còn là biểu tượng của phong cách và sự linh hoạt trong mọi cuộc hành trình. Đây thực sự là sự lựa chọn tuyệt vời cho những người yêu thích sự tự do và thoải mái trên đường phố.  ',
                'hot_product' => 0,
                'name' => 'TMDT Đường Phố Touring GIANT Escape 1 Disc – Phanh Đĩa, Bánh 700C – 2024',
                'status' => 1,
                'views' => 10,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'id_category' => 1,
                'id_brand' => 18,
                'id_discount' => 2,
                'slug' => 'xe-dap-the-thao-touring-jeep-freefom-lx-66-8',
                'description' => 'id_8
TMDT Đường Phố Touring JEEP Freedom LX-66 Disc – Phanh Đĩa, Bánh 700C
JEEP Freedom LX-66 Disc – Phanh Đĩa, Bánh 700C là một mẫu TMDT đường phố touring hiện đại, mang lại sự kết hợp hoàn hảo giữa thiết kế bền bỉ, tính năng linh hoạt và hiệu suất vượt trội. Với cấu trúc chắc chắn và tính năng vận hành mượt mà, chiếc xe này đáp ứng tốt nhu cầu di chuyển hằng ngày, dạo chơi hoặc tham gia các hành trình dài.

1. Thiết kế hiện đại và màu sắc thanh lịch
Kích cỡ:
Xe có kích thước One size (700C), phù hợp với đa dạng người dùng. Với khả năng điều chỉnh linh hoạt các bộ phận như yên và ghi đông, chiếc xe mang lại sự thoải mái tối đa cho người lái.
Màu sắc:
Xe có hai tùy chọn màu sắc Đen và Trắng, mang đến vẻ ngoài thanh lịch, hiện đại và dễ dàng phù hợp với phong cách cá nhân của người sử dụng.
2. Khung xe Jeep ALU bền nhẹ
Chất liệu khung:
Khung xe được chế tạo từ hợp kim nhôm Jeep ALU, giúp giảm trọng lượng tổng thể của xe nhưng vẫn đảm bảo độ bền và khả năng chịu lực tốt. Thiết kế này cho phép xe vận hành linh hoạt, dễ dàng điều khiển trên mọi loại địa hình.
Phuộc trước Jeep STL:
Phuộc trước bằng thép chịu lực cao (STL) giúp giảm chấn hiệu quả, mang lại trải nghiệm lái êm ái ngay cả khi đi qua các đoạn đường không bằng phẳng.
3. Hệ thống bánh xe và lốp chất lượng
Vành xe ALU Double Wall:
Vành nhôm hai lớp với 36 lỗ (36H) tăng cường độ cứng và khả năng chịu tải, đảm bảo độ ổn định khi di chuyển trên những cung đường dài.
Lốp Jeep 700x32C:
Lốp xe được thiết kế với kích thước 700C, giúp xe duy trì sự cân bằng và tăng độ bám đường. Lốp có độ bền cao, phù hợp cho cả đường phố bằng phẳng lẫn các đoạn đường không bằng phẳng.
4. Hệ thống điều khiển linh hoạt
Ghi đông Jeep STL:
Ghi đông rộng 640mm mang lại khả năng kiểm soát tốt, giúp người lái dễ dàng chuyển hướng hoặc điều khiển xe trong môi trường đô thị đông đúc.
Pô tăng Jeep ALU:
Pô tăng kích thước 31.8x80mm được làm từ hợp kim nhôm bền nhẹ, hỗ trợ điều chỉnh tư thế lái thoải mái và giảm áp lực lên cơ vai, cổ trong hành trình dài.
Cốt yên Jeep STL:
Cốt yên 30.4x300mm, được chế tạo từ thép chắc chắn, mang lại sự ổn định và giảm thiểu rung lắc khi di chuyển qua các bề mặt không bằng phẳng.
Yên xe Jeep:
Yên xe thiết kế rộng, êm ái, mang lại cảm giác thoải mái trong các chuyến đi dài hoặc sử dụng hằng ngày.
5. Hệ thống truyền động 24 tốc độ
Tay đề Jeep:
Tay đề 24 tốc độ giúp người lái chuyển số nhanh chóng và linh hoạt, dễ dàng điều chỉnh tốc độ phù hợp với từng điều kiện đường.
Chuyển đĩa Jeep (3 tốc độ) và chuyển líp Jeep (8 tốc độ):
Hệ thống truyền động này hỗ trợ người lái di chuyển nhẹ nhàng trên đường bằng và leo dốc dễ dàng, đảm bảo hiệu suất vận hành tối ưu.
Bộ líp 13-28T:
Bộ líp 8 tốc độ cung cấp dải số rộng, phù hợp với nhu cầu di chuyển trong môi trường đô thị và đường trường.
Giò đĩa Jeep STL 22/32/42x170mm:
Giò đĩa làm từ thép chắc chắn, mang lại lực đạp mạnh mẽ và khả năng vận hành bền bỉ.
Sên xe 1/2x3/32 8 Speed:
Sên xe chất lượng cao đảm bảo khả năng truyền động mượt mà và độ bền lâu dài.
6. Hệ thống phanh cơ Jeep Mechanical Disc
Phanh cơ Jeep Mechanical Disc:
Hệ thống phanh đĩa cơ giúp tăng khả năng kiểm soát và lực phanh mạnh mẽ, đảm bảo an toàn tối đa trong mọi điều kiện thời tiết, đặc biệt là trên các bề mặt đường ướt hoặc trơn.
7. Trọng lượng nhẹ và vận hành ổn định
Trọng lượng:
Với khung nhôm nhẹ và thiết kế tối ưu, JEEP Freedom LX-66 Disc không chỉ dễ dàng điều khiển mà còn mang lại sự linh hoạt và thoải mái trong suốt hành trình.
Kết luận: Lựa chọn lý tưởng cho đô thị và đường trường
JEEP Freedom LX-66 Disc – Phanh Đĩa, Bánh 700C là mẫu TMDT hoàn hảo dành cho những ai tìm kiếm một phương tiện di chuyển linh hoạt, an toàn và phong cách. Với thiết kế khung nhôm bền nhẹ, hệ thống truyền động 24 tốc độ, phanh đĩa cơ mạnh mẽ và các linh kiện chất lượng cao, mẫu xe này phù hợp cho cả nhu cầu đi lại hàng ngày và những chuyến đi xa.',
                'hot_product' => 0,
                'name' => 'TMDT Thể Thao Touring JEEP Freedom LX-66 Disc, Phanh Đĩa – Bánh 700C',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 9,
                'id_category' => 2,
                'id_brand' => 4,
                'id_discount' => 2,
                'slug' => 'xe-dap-duong-truong-touring-giant-fastroad-advanced-1-9',
                'description' => '
                        Với thiết kế năng động cùng gam màu đen cá tính, TMDT đường phố Touring GIANT Fastroad Advanced 1 – Phanh Đĩa, Bánh 700C – 2024 thu hút người dùng ngay từ ánh nhìn đầu tiên. Không chỉ vậy, mẫu xe này còn có thể phục vụ nhiều mục đích sử dụng khác nhau như đi học, đi chơi, đi làm hay đi dạo mát…
                        Thiết kế thể thao nhưng không kém phần thời trang
                        Ngoại hình TMDT Đường Phố Touring GIANT Fastroad Advanced 1 mang đậm đường nét thể thao khỏe khoắn với gam màu đen bóng ấn tượng. Đi kèm là logo thương hiệu GIANT nổi bật trên khung sườn, giúp tổng thể xe thêm phần cuốn hút và thời trang.
                        Touring GIANT Fastroad Advanced 1 hiện đang bày bán tại Xedap.vn với 3 size cơ bản (gồm size XS, size S và size M) và 1 màu duy nhất – Carbon đen bóng thu hút.

                        Khung sườn Advanced-Grade Composite cứng cáp
                        GIANT lựa chọn cho khung xe Fastroad Advanced 1 chất liệu đặc trưng của đa số dòng TMDT thể thao cao cấp – Advanced SL-Grade Composite. Ưu điểm nổi bật của vật liệu này là trọng lượng siêu nhẹ nhưng rất cứng cáp, ít bị cong vênh sau một thời gian sử dụng. Đồng thời, khung xe Advanced SL-Grade Composite có khả năng “xé gió” mạnh mẽ, giúp phương tiện tăng tốc nhanh chóng ở những cung đường bằng phẳng.
                        Ghi đông ngang GIANT Connect 
                        Sản phẩm lắp đặt ghi đông Giant Connect dáng ngang, không sừng và vừa vặn khung tay của người Việt Nam nhằm duy trì tư thế ngồi thẳng lưng, hạn chế đau mỏi cũng như tạo nhiều không gian lắp đặt phụ kiện yêu thích tùy theo nhu cầu sử dụng. Đồng thời, pô tăng Giant Contact với góc nghiêng 8 độ tạo cảm giác thoải mái khi cầm lái trong thời gian dài.
                        Cặp lốp Giant Gavia Fondo 2 không ruột bền bỉ
                        Cặp lốp không ruột Giant Gavia Fondo 2 kích thước 700x32c mang đến khả năng thích ứng tốt với áp suất và nhiệt độ cao, giúp phương tiện tăng tốc nhanh nhưng vẫn bảo đảm an toàn. Cùng với đó, chế độ Tubeless của cặp lốp giảm thiểu nguy cơ bị đâm thủng, từ đó tăng độ bền tối đa.
                        Bộ truyền động Shimano mượt mà
                        Sản phẩm lắp đặt hệ thống truyền động 2×11 với tay đề Shimano 105 SL-RS700, chuyển đĩa Shimano 105 FD-R7000 2-speed và chuyển líp Shimano 105 RD-R7000 11-speed. Qua đó, phương tiện có thể chuyển số linh hoạt, chính xác theo mong muốn của người sử dụng. 

                        Kết hợp cùng bộ bạc đạn Shimano Press Fit, bộ líp Shimano CS-HG700, sên xe KMC X11 và giò dĩa FSA Omega 48/32T, mẫu xe sở hữu hiệu suất vận hành mượt mà ở mọi địa hình, bền bỉ trong mọi thời gian.
                        Sở hữu những trang bị an toàn cao cấp
                        Không chỉ tạo ra sự thoải mái trên mọi chặng đường, GIANT còn bảo đảm an toàn tuyệt đối bằng cách tích hợp nhiều trang bị hiện đại như: 

                        Phanh đĩa thủy lực Tektro HD-R280
                        Sản phẩm sở hữu hệ thống phanh Tektro HD-R280 thủy lực với lực bóp phanh nhẹ, giúp người cầm lái dễ dàng giảm tốc và xử lý những tình huống bất ngờ. Không chỉ vậy, thương hiệu trang bị thêm đĩa phanh Giant MPH [F]140mm, [R]140mm, có tác dụng duy trì hiệu suất vận hành ổn định lâu dài. 
                        Phuộc Advanced-Grade Composite cứng cáp 
                        Nhà sản xuất cũng sử dụng Advanced-Grade Composite cho bộ phuộc, chế tác bằng công nghệ Alloy OverDrive Steerer giúp bạn kiểm soát tốc độ hiệu quả tùy theo địa hình. Đồng thời, linh kiện cũng có độ bền cao và giữ cân bằng tốt cho tổng thể TMDT.
                        Yên xe Giant ErgoContact mềm mại
                        Nhằm mang đến trải nghiệm di chuyển thoải mái nhất có thể, GIANT lắp đặt chiếc yên Giant ErgoContact cao cấp với rãnh thoáng khí lớn ngay trung tâm. Thêm vào đó, khuôn yên có chất liệu đàn hồi tốt nhằm hạn chế đau mỏi khi cầm lái thời gian dài.
                        Với các thiết kế thể thao năng động và nhiều tính năng ưu việt, GIANT Fastroad Advanced 1 – Phanh Đĩa, Bánh 700C – 2024 là lựa chọn tuyệt vời cho những ai đang tìm kiếm mẫu TMDT thể thao đường phố.',
                'hot_product' => 0,
                'name' => 'TMDT Đường Trường Touring GIANT Fastroad Advanced 1 – Phanh Đĩa, Bánh 700C – 2024',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 10,
                'id_category' => 2,
                'id_brand' => 17,
                'id_discount' => 2,
                'slug' => 'xe-dap-duong-truong-touring-liv-alight-3-disc-10',
                'description' => 'id_10
TMDT Đường Phố Touring LIV Alight 3 DD Disc – 2024 là dòng sản phẩm đa năng, kết hợp giữa ưu thế tốc độ của TMDT đường trường và sự linh hoạt, ổn định của TMDT leo núi. Đây là lựa chọn hoàn hảo dành cho những bạn nữ năng động và yêu thích lối sống xanh, sử dụng để đi lại hàng ngày hoặc rèn luyện thể thao tăng cường sức khỏe.
TMDT Touring LIV Alight 3 DD Disc – 2022 mang kiểu dáng hardtail cứng cáp, khỏe khoắn nhưng không kém phần thanh lịch nhờ bộ khung nhỏ gọn và đường nét thiết kế thanh mảnh. Mẫu xe ra mắt thị trường với hai phiên bản màu độc lạ gồm Tím nâu trầm (Figuier) và màu Vàng sữa tươi sáng (Pistachio) cùng với 3 loại kích cỡ: XS, S, M để các bạn nữ lựa chọn theo sở thích và vóc dáng riêng.
Khung sườn hợp kim nhôm siêu nhẹ, kiểu dáng phù hợp với nữ
Touring LIV Alight 3 DD Disc – 2022 có bộ khung làm từ hợp kim nhôm ALUXX siêu nhẹ, các ống gióng được thiết kế theo hình dạng đặc biệt để tăng độ cứng và độ bền. Hơn nữa, mối nối trên khung sườn được thực hiện bằng kỹ thuật hàn vảy cá mịn đẹp, tạo thành bộ khung hình học kim cương đạt chuẩn, đảm bảo sức chịu tải lớn, đồng thời đáp ứng khả năng di chuyển nhanh chóng, linh hoạt và cân bằng.

Nhằm giúp chị em phụ nữ thoải mái hơn trong quá trình sử dụng, ống gióng phía trên của mẫu xe được bố trí thấp dần về phía gióng ngồi, tạo khoảng trống phù hợp để người lái dễ dàng lên xuống mà không phải nhấc chân lên cao gây bất tiện.
Ghi đông tay ngang cánh én nhẹ và linh hoạt
Touring LIV Alight 3 DD Disc – 2022 trang bị ghi đông tay ngang không sừng gọn nhẹ, hình dạng cánh én có hai đầu hơi nhô lên, tạo tư thế ngồi thẳng lưng để người lái dễ dàng quan sát xung quanh khi lưu thông trong đường phố đông đúc, đồng thời không bị mỏi cổ và mỏi tay khi đạp xe đường dài.

Mẫu xe sử dụng pô tăng đường kính 25.4mm và thân ngắn, giúp người lái điều khiển phương hướng linh hoạt, phản ứng nhanh nhạy và chính xác hơn khi gặp vật cản hoặc những tình huống bất ngờ.
Bánh xe chống thủng và bám đường tốt
Cặp bánh của Touring LIV Alight 3 DD Disc – 2022 có kích thước 700C (tương đương 29 inch) và bản hẹp 38C, thiết kế đáp ứng được yêu cầu về tốc độ và giảm góc va chạm khi gặp vật cản, đảm bảo di chuyển nhanh, ổn định trên mọi địa hình. Trên bề mặt lốp có nhiều gai nhỏ với tác dụng chống trơn trượt khi gặp trời mưa hoặc đoạn đường ẩm ướt.

Ngoài ra, cấu tạo lốp Giant S-X3 còn có khả năng chống đâm thủng vượt trội, giúp hạn chế các vật thể đâm vào bánh xe gây nổ lốp, xẹp lốp, tăng độ an toàn khi người lái đi trong thành phố.
Bộ truyền động Shimano Tourney 21 tốc độ linh hoạt, mượt mà
TMDT Touring LIV Alight 3 DD Disc – 2022 có khả năng sang số nhẹ nhàng, chuyển đổi tốc độ nhanh chóng và chính xác, phù hợp với nhiều dạng địa hình đường bằng, leo dốc, đường gồ ghề nhẹ. Đó là nhờ bộ truyền động Shimano Tourney 21 tốc độ, gồm 3 tầng đĩa trước và 7 tầng líp sau, điều khiển bởi tay đề Shimano Tourney 3×7 nhạy bén, hiệu quả.

Ngoài ra, bộ líp Shimano MF-TZ500-7, sên xe KMC Z7 và giò dĩa 28/38/48 giúp xe dẫn động nhẹ nhàng, hỗ trợ người lái di chuyển trơn tru, nhanh chóng mà không tốn nhiều sức lực, không bị mất đà khi leo dốc.
An toàn, ổn định hơn nhờ hệ thống phanh đĩa và phuộc nhôm
Nhằm giúp người lái di chuyển an toàn, yên tâm hơn khi xuống dốc hoặc chạy địa hình trơn trượt, Touring LIV Alight 3 DD Disc – 2022 trang bị hệ thống phanh đĩa thủy lực Tektro TKB-172, rotor 160mm hoạt động mạnh mẽ, dễ dàng điều chỉnh bằng tay thắng nhạy bén, cho lực hãm phanh lớn và chính xác trong mọi điều kiện thời tiết, khi dừng gấp thì xe không bị lật bánh gây tai nạn.

Ngoài ra, bộ phuộc cứng bằng nhôm có tác dụng giữ cho xe luôn ổn định, vững vàng và êm ái, hạn chế tối đa tiếng ồn khi đi trên một số địa hình gồ ghề nhẹ như vỉa hè, đường đất, đường có đá sỏi.
Yên xe êm ái cùng cốt yên D-Fuse vững chắc, tối ưu sức chịu tải
Touring LIV Alight 3 DD Disc – 2022 sử dụng yên xe Liv Sport Comfort có độ rộng và độ dày vừa phải, bọc đệm êm ái giúp các bạn nữ thoải mái khi ngồi, không bị ê mông, đau nhức cơ xương.

Cốt yên bằng nhôm vững chắc với kiểu dáng được chế tạo theo công nghệ D-Fuse độc quyền, đảm bảo tối ưu sức chịu tải và ổn định tư thế lái, giữ vững thăng bằng khi ngồi lái trên địa hình kém bằng phẳng.',
                'hot_product' => 0,
                'name' => 'TMDT Đường Trường Touring LIV Alight 3 DD Disc – Phanh Đĩa , Bánh 700C – 2024',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 11,
                'id_category' => 2,
                'id_brand' => 4,
                'id_discount' => 2,
                'slug' => 'xe-dap-duong-truong-touring-giant-fastroad-1-11',
                'description' => 'TMDT Đường Trường Touring GIANT Fastroad 1 – Phanh Đĩa, Bánh 700C – 2024',
                'hot_product' => 0,
                'name' => 'TMDT Đường Trường Touring GIANT Fastroad 1 – Phanh Đĩa, Bánh 700C – 2024',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 12,
                'id_category' => 2,
                'id_brand' => 4,
                'id_discount' => 2,
                'slug' => 'xe-dap-duong-truong-touring-giant-fastroad-2-12',
                'description' => 'TMDT Đường Trường Touring GIANT Fastroad 2 – Phanh Đĩa, Bánh 700C – 2024',
                'hot_product' => 0,
                'name' => 'TMDT Đường Trường Touring GIANT Fastroad 2 – Phanh Đĩa, Bánh 700C – 2024',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 13,
                'id_category' => 2,
                'id_brand' => 4,
                'id_discount' => 2,
                'slug' => 'xe-dap-duong-truong-touring-giant-fastroad-advanced-2-13',
                'description' => 'TMDT Đường Trường Touring GIANT Fastroad Advanced 2 – Phanh Đĩa, Bánh 700C – 2024',
                'hot_product' => 0,
                'name' => 'TMDT Đường Trường Touring GIANT Fastroad Advanced 2 – Phanh Đĩa, Bánh 700C – 2024',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 14,
                'id_category' => 2,
                'id_brand' => 19,
                'id_discount' => 2,
                'slug' => 'xe-dap-duong-truong-touring-totem-alpha-14',
                'description' => '
                    TMDT Đường Phố Touring Totem Alpha là sự lựa chọn tuyệt vời cho những ai đam mê khám phá và di chuyển trong thành phố. Với thiết kế tinh tế và tính năng vượt trội, Totem Alpha mang lại trải nghiệm lái xe mượt mà và thoải mái trên mọi cung đường.

                    Khung và Phuộc Chắc Chắn:
                    Totem Alpha được trang bị khung hộp kim siêu nhẹ, bền chắc, mang lại sự ổn định và linh hoạt khi di chuyển. Phuộc trước giảm xóc giúp hấp thụ va chạm và giảm mỏi mệt trong những chuyến đi dài.

                    Bánh Xe 700C Linh Hoạt:
                    Với kích thước bánh xe 700C, Totem Alpha cung cấp tốc độ và khả năng vượt địa hình tốt. Lốp xe chất lượng cao giúp tăng cường độ bám và độ ổn định, đảm bảo an toàn trong mọi điều kiện đường phố.

                    Bộ Truyền Động Đa Tốc Độ:
                    Totem Alpha được trang bị bộ truyền động Shimano Altus đa tốc độ, giúp xe vận hành mượt mà và chuyển số nhanh chóng. Người lái dễ dàng điều chỉnh tốc độ phù hợp với mọi tình huống, từ những con đường phẳng lặng đến những đoạn đường dốc.

                    Hệ Thống Phanh Đĩa An Toàn:
                    Hệ thống phanh đĩa trên Totem Alpha mang lại hiệu suất phanh tốt trong mọi điều kiện thời tiết, giúp người lái kiểm soát xe dễ dàng và an toàn.

                    Thiết Kế Hiện Đại và Tiện Lợi:
                    Với thiết kế hiện đại và tiện lợi, Totem Alpha không chỉ là phương tiện di chuyển mà còn là người bạn đồng hành đáng tin cậy. Chiếc xe này còn được trang bị các phụ kiện tiện ích như giá để chai nước, giá đỡ điện thoại, giúp chuyến đi của bạn thêm phần thú vị.

                    Kết Luận:
                    TMDT Đường Phố Touring Totem Alpha Bánh 700c là sự kết hợp hoàn hảo giữa thiết kế đẹp mắt, tính năng ưu việt và độ bền cao. Đây chính là lựa chọn lý tưởng cho những chuyến đi khám phá thành phố, mang lại trải nghiệm lái xe thoải mái và an toàn.',
                'hot_product' => 0,
                'name' => 'TMDT Đường trường Touring TOTEM Alpha – Bánh 700C',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 15,
                'id_category' => 3,
                'id_brand' => 4,
                'id_discount' => 2,
                'slug' => 'xe-dap-dia-hinh-mtb-giant-talon-29-3-15',
                'description' => 'TMDT Địa Hình MTB GIANT Talon 29 3 - Phanh Đĩa, Bánh 29 Inches - 2025',
                'hot_product' => 0,
                'name' => 'TMDT Địa Hình MTB GIANT Talon 29 3 - Phanh Đĩa, Bánh 29 Inches - 2025',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 16,
                'id_category' => 3,
                'id_brand' => 4,
                'id_discount' => 2,
                'slug' => 'xe-dap-dia-hinh-mtb-giant-atx-610-3-16',
                'description' => 'TMDT Địa Hình MTB GIANT ATX 610 – Phanh Đĩa, Bánh 24 Inches – 2025',
                'hot_product' => 0,
                'name' => 'TMDT Địa Hình MTB GIANT ATX 610 – Phanh Đĩa, Bánh 24 Inches – 2025',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 17,
                'id_category' => 3,
                'id_brand' => 4,
                'id_discount' => 2,
                'slug' => 'xe-dap-dia-hinh-mtb-giant-xtc-advanced-29-17',
                'description' => 'TMDT Địa Hình MTB Giant XTC Advanced 29 1.5 là một chiếc TMDT địa hình MTB cao cấp, mang lại sự kết hợp hoàn hảo giữa hiệu suất, độ bền và tính linh hoạt. Với công nghệ tiên tiến và thiết kế đột phá, chiếc xe này hứa hẹn đưa trải nghiệm đạp xe lên một tầm cao mới.


Hiệu Suất Vượt Trội
XTC Advanced 29 1.5 được trang bị bộ truyền động Shimano đẳng cấp, mang lại hiệu suất vận hành ổn định và mạnh mẽ trên mọi loại địa hình. Hệ thống phanh đĩa cơ đảm bảo sự an toàn và kiểm soát tối đa trong mọi điều kiện đường đi, từ đường mòn đồi núi đến đường phố đô thị.

Thiết Kế Tiên Tiến
Với khung composite siêu nhẹ, chiếc xe này mang lại sự cứng cáp và linh hoạt, giúp người lái dễ dàng vượt qua mọi thách thức trên đường đi. Thiết kế khung độc đáo với công nghệ Advanced Composite giúp giảm rung và tăng cường hiệu suất điều khiển.

Trải Nghiệm Điều Khiển Tuyệt Vời
Bánh xe 29inches kết hợp với lốp cao cấp giúp tăng cường vận tốc và kiểm soát trên mọi loại địa hình. Hệ thống treo phía trước và sau mang lại sự ổn định và êm ái, tạo điều kiện thuận lợi cho một trải nghiệm đạp xe mượt mà và thoải mái.

Lựa Chọn Lý Tưởng Cho Những Cuộc Phiêu Lưu
Giant XTC Advanced 29 1.5 không chỉ là một chiếc TMDT địa hình, mà còn là người bạn đồng hành lý tưởng cho mọi cuộc phiêu lưu. Dù là trên những con đường gồ ghề hay những cung đường đường trường dài, chiếc xe này sẽ mang lại trải nghiệm đỉnh cao và không gian khám phá mới mẻ.

TMDT Địa Hình MTB Giant XTC Advanced 29 1.5 là sự lựa chọn hàng đầu cho những ai đam mê thách thức và khám phá. Với sự kết hợp hoàn hảo giữa hiệu suất vượt trội, thiết kế tiên tiến và tính linh hoạt, chiếc xe này sẽ là người bạn đồng hành đáng tin cậy trên mọi hành trình địa hình.',
                'hot_product' => 1,
                'name' => 'TMDT Địa Hình MTB GIANT XTC Advanced 29 1.5 – Phanh Đĩa, Bánh 29 Inches – 2024',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 18,
                'id_category' => 3,
                'id_brand' => 4,
                'id_discount' => 2,
                'slug' => 'xe-dap-dia-hinh-mtb-giant-xtc-advanced-3-2022-18',
                'description' => 'TMDT Địa Hình GIANT XTC Advanced 3 – Phanh Đĩa, Bánh 27.5 Inches – 2022',
                'hot_product' => 0,
                'name' => 'TMDT Địa Hình GIANT XTC Advanced 3 – Phanh Đĩa, Bánh 27.5 Inches – 2022',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 19,
                'id_category' => 3,
                'id_brand' => 4,
                'id_discount' => 2,
                'slug' => 'xe-dap-dia-hinh-mtb-giant-roam-4-2022-19',
                'description' => 'TMDT Địa Hình MTB GIANT Roam 4 Disc – Phanh Đĩa, Bánh 700C – 2022',
                'hot_product' => 1,
                'name' => 'TMDT Địa Hình MTB GIANT Roam 4 Disc – Phanh Đĩa, Bánh 700C – 2022',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 20,
                'id_category' => 3,
                'id_brand' => 4,
                'id_discount' => 2,
                'slug' => 'xe-dap-dia-hinh-mtb-giant-xtc-advance-29-2024-20',
                'description' => 'TMDT Địa Hình MTB GIANT XTC Advanced 29 2 – Phanh Đĩa, Bánh 29 Inches – 2024',
                'hot_product' => 1,
                'name' => 'TMDT Địa Hình MTB GIANT XTC Advanced 29 2 – Phanh Đĩa, Bánh 29 Inches – 2024',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // 
            // 
            // 
            [
                'id' => 21,
                'id_category' => 4,
                'id_brand' => 4,
                'id_discount' => 2,
                'slug' => 'xe-dap-dua-duong-truong-road-giant-people-advance-1-2022-21',
                'description' => 'Xe Đạp Đua Đường Trường Road GIANT Propel Advanced SL 1 Disc – Phanh đĩa, Bánh 700C – 2022',
                'hot_product' => 0,
                'name' => 'Xe Đạp Đua Đường Trường Road GIANT Propel Advanced SL 1 Disc – Phanh đĩa, Bánh 700C – 2022',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 22,
                'id_category' => 4,
                'id_brand' => 4,
                'id_discount' => 1,
                'slug' => 'xe-dap-dua-duong-truong-road-giant-people-advance-1-dicsc-2025-22',
                'description' => 'TMDT Đua Đường Trường Road GIANT Propel Advanced 1 – Phanh Đĩa, Bánh 700C – 2025',
                'hot_product' => 0,
                'name' => 'TMDT Đua Đường Trường Road GIANT Propel Advanced 1 – Phanh Đĩa, Bánh 700C – 2025',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 23,
                'id_category' => 4,
                'id_brand' => 17,
                'id_discount' => 1,
                'slug' => 'xe-dap-dua-duong-truong-road-liv-Enviliv-advance-1-2025-23',
                'description' => 'TMDT Đua Đường Trường Road LIV Enviliv Advanced 1 – Phanh Đĩa, Bánh 700C – 2025',
                'hot_product' => 0,
                'name' => 'TMDT Đua Đường Trường Road LIV Enviliv Advanced 1 – Phanh Đĩa, Bánh 700C – 2025',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 24,
                'id_category' => 4,
                'id_brand' => 4,
                'id_discount' => 1,
                'slug' => 'xe-dap-dua-duong-truong-road-giant-propel-advance-pro-1-2024-24',
                'description' => 'TMDT Đua Đường Trường Road GIANT Propel Advanced Pro 0 – Phanh Đĩa, Bánh 700C – 2024',
                'hot_product' => 0,
                'name' => 'TMDT Đua Đường Trường Road GIANT Propel Advanced Pro 0 – Phanh Đĩa, Bánh 700C – 2024',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 25,
                'id_category' => 4,
                'id_brand' => 4,
                'id_discount' => 1,
                'slug' => 'xe-dap-dua-duong-truong-road-giant-tcr-advance-pro-0-disc-di2-2024-25',
                'description' => 'TMDT Đua Đường Trường Road GIANT TCR Advanced Pro 0 Disc Di2 – Phanh Đĩa, Bánh 700C – 2024',
                'hot_product' => 0,
                'name' => 'TMDT Đua Đường Trường Road GIANT TCR Advanced Pro 0 Disc Di2 – Phanh Đĩa, Bánh 700C – 2024',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 26,
                'id_category' => 4,
                'id_brand' => 4,
                'id_discount' => 1,
                'slug' => 'xe-dap-dua-duong-truong-road-giant-contend-1-2025-26',
                'description' => 'TMDT Đua Đường Trường Road GIANT Contend 1 - Bánh 700C - 2025',
                'hot_product' => 0,
                'name' => 'TMDT Đua Đường Trường Road GIANT Contend 1 - Bánh 700C - 2025',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // 
            // 
            [
                'id' => 27,
                'id_category' => 9,
                'id_brand' => 17,
                'id_discount' => 1,
                'slug' => 'xe-dap-nu-touring-liv-alight-2-dd-city-disc-2022-27',
                'description' => 'TMDT Nữ Touring LIV Alight 2 DD City Disc - Phanh Đĩa, Bánh 700C - 2022',
                'hot_product' => 0,
                'name' => 'TMDT Nữ Touring LIV Alight 2 DD City Disc - Phanh Đĩa, Bánh 700C - 2022',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 28,
                'id_category' => 9,
                'id_brand' => 17,
                'id_discount' => 1,
                'slug' => 'xe-dap-nu-touring-liv-alight-3-dd-city-disc-2022-28',
                'description' => 'TMDT Nữ Touring LIV Alight 3 DD Disc – Phanh Đĩa, Bánh 700C – 2022',
                'hot_product' => 1,
                'name' => 'TMDT Nữ Touring LIV Alight 3 DD Disc – Phanh Đĩa, Bánh 700C – 2022',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 29,
                'id_category' => 10,
                'id_brand' => 8,
                'id_discount' => 1,
                'slug' => 'xe-dap-tre-em-youth-trinx-princess-29',
                'description' => 'TMDT Trẻ Em Youth TRINX Princess – Bánh 18 Inches',
                'hot_product' => 0,
                'name' => 'TMDT Trẻ Em Youth TRINX Princess – Bánh 18 Inches',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 30,
                'id_category' => 5,
                'id_brand' => 4,
                'id_discount' => 1,
                'slug' => 'xe-dap-gap-folding-giant-fd-806-30',
                'description' => 'TMDT Gấp Folding GIANT FD-806 – Bánh 20 Inches – 2022',
                'hot_product' => 0,
                'name' => 'TMDT Gấp Folding GIANT FD-806 – Bánh 20 Inches – 2022',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // 
            // 
            // phụ kiện
            [
                'id' => 31,
                'id_category' => 16,
                'id_brand' => 4,
                'id_discount' => 1,
                'slug' => 'chan-bun-sau-xe-dap-giant-speedshield-chip-on-rear-fender-31',
                'description' => 'Chắn Bùn Sau TMDT GIANT Speedshield Clip-On Rear Fender',
                'hot_product' => 0,
                'name' => 'Chắn Bùn Sau TMDT GIANT Speedshield Clip-On Rear Fender',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 32,
                'id_category' => 17,
                'id_brand' => 4,
                'id_discount' => 1,
                'slug' => 'de-gan-gong-nuoc-giant-adapter-water-bottle-cage-trintity-wb-cage-adapter-32',
                'description' => 'Đế Gắn Gọng Nước GIANT Adapter Water Bottle Cage Trinity – WB Cage Adapter',
                'hot_product' => 0,
                'name' => 'Đế Gắn Gọng Nước GIANT Adapter Water Bottle Cage Trinity – WB Cage Adapter',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 33,
                'id_category' => 15,
                'id_brand' => 4,
                'id_discount' => 1,
                'slug' => 'bo-den-truoc-sau-xe-dap-pin-aa-20-10-gian-numen-combo-4-light-combo-kit-33',
                'description' => 'Bộ Đèn Trước Sau TMDT Pin AA 20 & 10 GIANT Numen Combo 4 Light Combo Kit',
                'hot_product' => 0,
                'name' => 'Bộ Đèn Trước Sau TMDT Pin AA 20 & 10 GIANT Numen Combo 4 Light Combo Kit',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 34,
                'id_category' => 18,
                'id_brand' => 4,
                'id_discount' => 1,
                'slug' => 'binh-co2-bom-xe-dap-giant-co2-16g-cartridges-10-packs-34',
                'description' => 'Bình CO2 Bơm TMDT GIANT CO2 16G Cartridges 10 Packs',
                'hot_product' => 0,
                'name' => 'Bình CO2 Bơm TMDT GIANT CO2 16G Cartridges 10 Packs',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 35,
                'id_category' => 17,
                'id_brand' => 4,
                'id_discount' => 1,
                'slug' => 'gong-nuoc-xe-dap-giant-airway-water-bottle-cage-35',
                'description' => 'Gọng Nước TMDT GIANT Airway Water Bottle Cage – Water Bottle',
                'hot_product' => 0,
                'name' => 'Gọng Nước TMDT GIANT Airway Water Bottle Cage – Water Bottle',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 36,
                'id_category' => 19,
                'id_brand' => 4,
                'id_discount' => 1,
                'slug' => 'de-gan-den-sau-xe-dap-giant-recon-tl-racl-mount-36',
                'description' => 'Đế Gắn Đèn Sau TMDT GIANT Recon TL Rack Mount',
                'hot_product' => 0,
                'name' => 'Đế Gắn Đèn Sau TMDT GIANT Recon TL Rack Mount',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 37,
                'id_category' => 20,
                'id_brand' => 4,
                'id_discount' => 1,
                'slug' => 'day-khoa-xe-dap-boc-silicone-tonyon-ty02-bicycle-lock-37',
                'description' => 'Dây Khóa TMDT Bọc Silicone 10x1000mm TONYON TY02 Bicycle Lock',
                'hot_product' => 0,
                'name' => 'Dây Khóa TMDT Bọc Silicone 10x1000mm TONYON TY02 Bicycle Lock',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 38,
                'id_category' => 20,
                'id_brand' => 4,
                'id_discount' => 1,
                'slug' => 'khoa-day-xe-dap-boc-nhua-vinbike-vb38-bicycle-lock-38',
                'description' => 'Khoá Dây TMDT Bọc Nhựa 10x1200mm (Light) VINBIKE VB38 Bicycle Lock',
                'hot_product' => 0,
                'name' => 'Khoá Dây TMDT Bọc Nhựa 10x1200mm (Light) VINBIKE VB38 Bicycle Lock',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // 
            // 
            // phu tung
            [
                'id' => 39,
                'id_category' => 21,
                'id_brand' => 20,
                'id_discount' => 1,
                'slug' => 'xich-xe-dap-shimano-cn-hg-901-links-for-11-speed-39',
                'description' => 'Xích TMDT SHIMANO CN-HG901-11 116 Links For 11-Speed (Road/MTB/E-Bike Compatible), 116 Links (W/Quick-Link, SM-CN900-11) Bicycle Chain',
                'hot_product' => 0,
                'name' => 'Xích TMDT SHIMANO CN-HG901-11 116 Links For 11-Speed (Road/MTB/E-Bike Compatible), 116 Links (W/Quick-Link, SM-CN900-11) Bicycle Chain',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 40,
                'id_category' => 21,
                'id_brand' => 20,
                'id_discount' => 1,
                'slug' => 'xich-xe-dap-shimano-cn-lg-126-links-for-lg-speed-bicycle-chain-40',
                'description' => 'Xích TMDT SHIMANO CN-LG500 126 Links For LG 9/10/11 Speed, W/Quick-Link, Bicycle Chain',
                'hot_product' => 0,
                'name' => 'Xích TMDT SHIMANO CN-LG500 126 Links For LG 9/10/11 Speed, W/Quick-Link, Bicycle Chain',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 41,
                'id_category' => 22,
                'id_brand' => 20,
                'id_discount' => 1,
                'slug' => 'pedal-xe-dap-shimano-pd-m8100-deore-xt-w-o-reflector-2025-41',
                'description' => 'Pedal TMDT SHIMANO PD-M8100 Deore XT W/O Reflector, W/Cleat (SM-SH51)',
                'hot_product' => 0,
                'name' => 'Pedal TMDT SHIMANO PD-M8100 Deore XT W/O Reflector, W/Cleat (SM-SH51)',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 42,
                'id_category' => 22,
                'id_brand' => 20,
                'id_discount' => 1,
                'slug' => 'pedal-xe-dap-shimano-pd-t8000-deore-xt-w-o-reflector-bd-2025-42',
                'description' => 'Pedal TMDT SHIMANO PD-T8000 Deore XT W/ Reflector, W/Cleat (SM-SH56)',
                'hot_product' => 0,
                'name' => 'Pedal TMDT SHIMANO PD-T8000 Deore XT W/ Reflector, W/Cleat (SM-SH56)',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 43,
                'id_category' => 23,
                'id_brand' => 4,
                'id_discount' => 1,
                'slug' => 'banh-sau-xe-dap-giant-slr-1-65-disc-brake-hookless-rear-wheel-2025-43',
                'description' => 'Bánh Sau TMDT GIANT SLR 1 65 Disc Brake Hookless Rear Wheel',
                'hot_product' => 0,
                'name' => 'Bánh Sau TMDT GIANT SLR 1 65 Disc Brake Hookless Rear Wheel',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 44,
                'id_category' => 23,
                'id_brand' => 4,
                'id_discount' => 1,
                'slug' => 'banh-truoc-xe-dap-giant-slr-1-42-disc-brake-hookless-front-wheel-2025-44',
                'description' => 'Bánh Trước TMDT GIANT SLR 1 42 Disc Brake Hookless Front Wheel',
                'hot_product' => 0,
                'name' => 'Bánh Trước TMDT GIANT SLR 1 42 Disc Brake Hookless Front Wheel',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 45,
                'id_category' => 24,
                'id_brand' => 4,
                'id_discount' => 1,
                'slug' => 'vo-xe-dap-khong-ruot-giant-crosscut-at-ert-35c-tubeless-bicycle-tire-2025-45',
                'description' => 'Vỏ TMDT Không Ruột GIANT Crosscut AT ERT 35C Tubeless Bicycle Tire',
                'hot_product' => 0,
                'name' => 'Vỏ TMDT Không Ruột GIANT Crosscut AT ERT 35C Tubeless Bicycle Tire',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 46,
                'id_category' => 24,
                'id_brand' => 4,
                'id_discount' => 1,
                'slug' => 'ruot-xe-dap-giant-sv-40mm-innertuube-and-valve-2025-46',
                'description' => 'Ruột TMDT GIANT 27.5×2.10 – 2.40 SV – 40MM Innertube And Valve',
                'hot_product' => 0,
                'name' => 'Ruột TMDT GIANT 27.5×2.10 – 2.40 SV – 40MM Innertube And Valve',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 47,
                'id_category' => 25,
                'id_brand' => 4,
                'id_discount' => 1,
                'slug' => 'ghi-dong-xe-dap-400mm-giant-contact-slr-aero-handlebar-2025-47',
                'description' => 'Ghi Đông TMDT 400mm GIANT Contact SLR Aero Handlebar (My23 Propel)',
                'hot_product' => 0,
                'name' => 'Ghi Đông TMDT 400mm GIANT Contact SLR Aero Handlebar (My23 Propel)',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 48,
                'id_category' => 25,
                'id_brand' => 4,
                'id_discount' => 1,
                'slug' => 'po-tang-xe-dap-carbon-100mm-giant-contact-slr-aero-100mn-2025-48',
                'description' => 'Pô Tăng TMDT Carbon 100mm GIANT Contact SLR Aero 100mm (My23 Propel)',
                'hot_product' => 0,
                'name' => 'Pô Tăng TMDT Carbon 100mm GIANT Contact SLR Aero 100mm (My23 Propel)',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 49,
                'id_category' => 25,
                'id_brand' => 4,
                'id_discount' => 1,
                'slug' => 'po-tang-xe-dap-nhom-100mm-giant-contact-slr-aero-100mn-2025-49',
                'description' => 'Pô Tăng TMDT Nhôm 100mm GIANT Contact SL Aero 100mm (My23 Propel)',
                'hot_product' => 0,
                'name' => 'Pô Tăng TMDT Nhôm 100mm GIANT Contact SL Aero 100mm (My23 Propel)',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 50,
                'id_category' => 21,
                'id_brand' => 20,
                'id_discount' => 1,
                'slug' => 'xich-xe-dap-shimano-cn-m8100-126-links-for-hg-12-speed-bicycle-chain-50',
                'description' => 'Xích TMDT SHIMANO CN-M8100 126 Links For HG 12-Speed, W/Quick-Link Bicycle Chain',
                'hot_product' => 0,
                'name' => 'Xích TMDT SHIMANO CN-M8100 126 Links For HG 12-Speed, W/Quick-Link Bicycle Chain',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 51,
                'id_category' => 21,
                'id_brand' => 20,
                'id_discount' => 1,
                'slug' => 'xich-xe-dap-shimano-cn-m9100-116-links-for-hg-12-speed-bicycle-chain-51',
                'description' => 'Xích TMDT SHIMANO CN-M9100 116 Links For HG 12-Speed, W/Quick-Link Bicycle Chain',
                'hot_product' => 0,
                'name' => 'Xích TMDT SHIMANO CN-M9100 116 Links For HG 12-Speed, W/Quick-Link Bicycle Chain',
                'status' => 1,
                'views' => 20,
                'import_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
