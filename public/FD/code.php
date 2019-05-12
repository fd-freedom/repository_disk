<?php 
  /**
  *  @description 验证码 
  *  @version  1.1V
  *  @author   Fd
  *  @Company:自由网@
  *  @email: nokialj18239055606@outlook.com 1315295001@qq.com
  *  @date : 2018/10/25
  */
  session_start();

  class Code
  {
    static $file;
  	static $utf8;
  	function __construct()
  	{  
  		// parent::__construct();
  	   self::$file = json_decode('{"yuan":["\u6e0a\u6e90\u6709\u81ea","\u6e0a\u4ead\u5c71\u7acb","\u6e0a\u505c\u5c71\u7acb","\u6e0a\u56fe\u8fdc\u7b97","\u6e0a\u6d8c\u98ce\u5389","\u6e0a\u6d93\u8816\u6fe9","\u6e0a\u6e05\u7389\u7d5c","\u6e0a\u6e1f\u5cb3\u5cd9","\u6e0a\u6e1f\u5cb3\u7acb","\u6e0a\u6e1f\u6cfd\u6c47","\u7f18\u6587\u751f\u4e49","\u5706\u6728\u8b66\u6795","\u5143\u6076\u5927\u5978","\u539f\u6765\u5982\u6b64","\u6028\u5165\u9aa8\u9ad3","\u539f\u5f62\u6bd5\u9732","\u539f\u5f62\u8d25\u9732","\u51a4\u5404\u6709\u5934"],"zai":["\u5728\u4eba\u8033\u76ee","\u5728\u52ab\u96be\u9003","\u5728\u5929\u4e4b\u7075","\u5728\u5b98\u8a00\u5b98","\u5728\u5bb6\u51fa\u5bb6","\u5728\u6240\u4e0d\u60dc","\u5728\u6240\u4e0d\u8f9e","\u5728\u6240\u96be\u514d","\u5728\u6b64\u4e00\u4e3e"],"ren":["\u4eba\u4ea1\u7269\u5728","\u5fcd\u803b\u5077\u751f","\u7a14\u6076\u4e0d\u609b","\u7a14\u6076\u85cf\u5978","\u4eba\u6025\u8ba1\u751f","\u4eba\u5fc3\u4e0d\u53e4","\u4eba\u5343\u4eba\u4e07","\u4efb\u91cd\u624d\u8f7b","\u4eba\u6211\u662f\u975e","\u4eba\u6765\u5ba2\u5f80","\u4efb\u8d24\u4f7f\u80fd","\u4eba\u5fc3\u5927\u5feb","\u4eba\u58f0\u9f0e\u6cb8","\u4eba\u591a\u53e3\u6742","\u4eba\u591a\u5634\u6742","\u4eba\u591a\u624b\u6742","\u4efb\u8fbe\u4e0d\u62d8","\u4eba\u4f17\u80dc\u5929","\u4eba\u8db3\u5bb6\u7ed9","\u4eba\u975e\u7269\u662f","\u4efb\u5176\u81ea\u7136","\u4eba\u7a77\u5fd7\u77ed","\u4eba\u751f\u671d\u9732","\u4eba\u95f4\u5929\u5802","\u4eba\u5f3a\u9a6c\u58ee","\u4eba\u9762\u517d\u5fc3"],"you":["\u4f18\u6e38\u81ea\u5728","\u60a0\u6e38\u81ea\u5728","\u60a0\u95f2\u81ea\u5728","\u6cb9\u5934\u5149\u68cd","\u6709\u7684\u653e\u77e2","\u6709\u53e3\u96be\u5206","\u6709\u5fd7\u65e0\u65f6","\u6cb9\u5e72\u706f\u5c3d","\u5fe7\u5fc3\u5982\u6363","\u4f18\u6e38\u81ea\u5f97","\u5c24\u4e91\u6ba2\u96e8","\u6cb9\u6d47\u706b\u71ce","\u5e7d\u671f\u5bc6\u7ea6","\u6709\u8272\u773c\u955c","\u6e38\u620f\u7ff0\u58a8","\u6cb9\u5149\u53ef\u9274","\u6709\u58f0\u6ca1\u6c14","\u6709\u773c\u65e0\u77b3","\u6709\u624d\u65e0\u547d","\u6709\u540d\u4ea1\u5b9e","\u6709\u52a0\u65e0\u5df2","\u6709\u6761\u6709\u7406","\u6709\u6043\u65e0\u6050","\u4f18\u80dc\u52a3\u8d25","\u72b9\u89e3\u5012\u60ac"],"da":["\u5927\u6709\u4eba\u5728","\u5927\u5934\u5c0f\u5c3e","\u5927\u884c\u5927\u5e02","\u5927\u5406\u5c0f\u559d","\u5927\u6709\u89c1\u5730","\u5927\u749e\u4e0d\u5b8c","\u5927\u96c5\u4e4b\u5802","\u5927\u660e\u6cd5\u5ea6","\u5927\u60ca\u5c0f\u602a","\u6253\u8349\u60ca\u86c7","\u5927\u9898\u5c0f\u4f5c","\u5927\u9519\u7279\u9519","\u5927\u5439\u6cd5\u87ba","\u5927\u5343\u4e16\u754c","\u5927\u542b\u7ec6\u5165","\u5927\u653e\u60b2\u58f0","\u5927\u662f\u5927\u975e","\u5927\u5feb\u4eba\u5fc3","\u5927\u79b9\u6cbb\u6c34","\u6253\u51e4\u7262\u9f99","\u5927\u800c\u5316\u4e4b"],"an":["\u5b89\u95f2\u81ea\u5728","\u978d\u9a6c\u52b3\u56f0","\u5b89\u4e4b\u82e5\u547d","\u5b89\u5bcc\u6064\u8d2b","\u5b89\u9b42\u5b9a\u9b44","\u6697\u5ba4\u4e0d\u6b3a","\u5b89\u826f\u9664\u66b4","\u6697\u9524\u6253\u4eba","\u5b89\u5b85\u6b63\u8def","\u5b89\u8f66\u84b2\u8f6e","\u5b89\u82e5\u6cf0\u5c71","\u6697\u5ba4\u5c4b\u6f0f"],"wu":["\u65e0\u6240\u4e0d\u5728","\u65e0\u4f11\u65e0\u4e86","\u6b66\u65ad\u4e61\u66f2","\u8bef\u5165\u6b67\u9014","\u65e0\u6240\u5fcc\u8bb3","\u65e0\u5bb6\u53ef\u5f52","\u821e\u722a\u5f20\u7259","\u65e0\u575a\u4e0d\u6467","\u65e0\u65bd\u4e0d\u53ef","\u65e0\u4e2d\u751f\u6709","\u65e0\u60c5\u65e0\u7eea","\u65e0\u4f9d\u65e0\u9760","\u7269\u7ade\u5929\u62e9","\u4e94\u96c0\u516d\u71d5","\u7269\u7f8e\u4ef7\u5ec9","\u65e0\u8fb9\u98ce\u6708","\u543e\u81ea\u6709\u5904","\u65e0\u53ef\u6bd4\u62df","\u65e0\u4e0e\u6bd4\u4f26","\u65e0\u53ef\u6bd4\u4f26","\u4e94\u82b1\u516b\u95e8","\u4e94\u5185\u4ff1\u5d29","\u65e0\u6076\u4e0d\u4f5c","\u65e0\u4eb2\u65e0\u6545","\u4e94\u4faf\u8721\u70db","\u4e94\u7f96\u5927\u592b","\u96fe\u6697\u4e91\u6df1","\u65e0\u660e\u65e0\u591c","\u65e0\u7cbe\u6253\u91c7","\u52a1\u672c\u6291\u672b","\u4e94\u5149\u5341\u8272","\u65e0\u6240\u987e\u60ee","\u4e94\u7537\u4e8c\u5973","\u7269\u6781\u5fc5\u8fd4","\u65e0\u8651\u65e0\u601d","\u65e0\u5b54\u4e0d\u5165","\u5c4b\u4e0b\u67b6\u5c4b","\u65e0\u62d8\u65e0\u7f1a","\u65e0\u4f24\u5927\u4f53","\u65e0\u5929\u4e8e\u4e0a","\u65e0\u51fa\u5176\u53f3","\u65e0\u53ef\u7f6e\u8fa9"],"zhi":["\u667a\u85cf\u761d\u5728","\u679d\u53f6\u6276\u82cf","\u679d\u5e72\u76f8\u6301","\u77e5\u96c4\u5b88\u96cc","\u5fd7\u58eb\u4ec1\u4eba","\u7eb8\u77ed\u60c5\u957f","\u4e4b\u6b7b\u9761\u5b83","\u76f4\u7709\u7756\u773c","\u6809\u98ce\u917e\u96e8","\u6307\u624b\u5212\u811a","\u77e5\u4e00\u4e07\u6bd5","\u77e5\u6211\u7f6a\u6211","\u8dd6\u72ac\u5420\u5c27","\u81f3\u5927\u81f3\u521a","\u7099\u51b0\u4f7f\u71e5","\u6b62\u6e34\u671b\u6885","\u6cbb\u56fd\u5b89\u6c11","\u8d28\u800c\u4e0d\u91ce","\u77e5\u5df1\u77e5\u5f7c","\u7ec7\u767d\u5b88\u9ed1","\u53ea\u9e21\u6597\u9152","\u76f4\u7709\u6012\u76ee","\u53ea\u89c1\u6811\u6728","\u6267\u9510\u62ab\u575a","\u54ab\u5c3a\u4e4b\u529f","\u76f4\u7709\u695e\u773c"],"xiao":["\u6d88\u9065\u81ea\u5728","\u6d88\u606f\u76c8\u865a","\u5c0f\u65f6\u4e86\u4e86","\u5c0f\u5bb6\u5b50\u6c14","\u6548\u6b7b\u8f93\u5fe0","\u5c0f\u8bd5\u950b\u8292","\u5c0f\u5b50\u540e\u751f","\u5578\u50b2\u98ce\u6708","\u67ad\u86c7\u9b3c\u602a","\u6548\u6b7b\u7586\u573a","\u5c0f\u811a\u5973\u4eba","\u5b5d\u601d\u4e0d\u532e","\u5c0f\u5ec9\u5927\u6cd5","\u5b5d\u5b50\u7231\u65e5","\u5578\u5412\u98ce\u4e91","\u5b5d\u608c\u529b\u7530","\u5c0f\u5fb7\u51fa\u5165","\u785d\u4e91\u5f39\u96e8","\u56a3\u5f20\u4e00\u65f6","\u6821\u77ed\u63a8\u957f"],"yi":["\u4e49\u4e0d\u5bb9\u8f9e","\u4e00\u671b\u65e0\u8fb9","\u9890\u7cbe\u517b\u795e","\u8bae\u8bba\u82f1\u53d1","\u4e00\u9762\u4e4b\u8bcd","\u4ee5\u5fae\u77e5\u8457","\u4e00\u547c\u767e\u8bfa","\u4e00\u4eba\u5f97\u9053","\u4e00\u5085\u4f17\u54bb","\u4ee5\u5feb\u5148\u7779","\u4ee5\u9000\u4e3a\u8fdb","\u4f9d\u6d41\u5e73\u8fdb","\u4e00\u65e0\u957f\u7269","\u9a7f\u8def\u6885\u82b1","\u4ee5\u6740\u53bb\u6740","\u4e00\u9ad8\u4e8c\u4f4e","\u4e00\u4e86\u767e\u4e86","\u7ffc\u7ffc\u5c0f\u5fc3","\u4ee5\u9632\u4e07\u4e00","\u4ee5\u8eab\u4f5c\u5219","\u4e00\u63b7\u767e\u4e07","\u4ee5\u4e00\u6301\u4e07","\u4ee5\u4e00\u77e5\u4e07","\u4e00\u4e01\u4e0d\u8bc6","\u4e00\u4e0d\u538b\u4f17","\u4e00\u4e0d\u626d\u4f17","\u4e00\u4e16\u4e4b\u96c4","\u4e00\u4e16\u9f99\u95e8","\u4e00\u4e18\u4e00\u58d1","\u4e00\u4e18\u4e4b\u8c89","\u4e00\u4e1d\u4e00\u6beb","\u4e00\u4e1d\u4e0d\u6302","\u4ee5\u53e4\u65b9\u4eca","\u8d3b\u7b11\u540e\u4eba","\u4e00\u95e8\u5fc3\u601d","\u4e00\u9e23\u60ca\u4eba","\u4e00\u53e3\u4e09\u820c","\u4ee5\u72f8\u81f3\u9f20","\u9057\u5f62\u53bb\u8c8c","\u4ee5\u758f\u95f4\u4eb2","\u79fb\u6613\u8fc1\u53d8","\u4e00\u65f6\u4e09\u523b","\u4e00\u671d\u4e4b\u5fff","\u5f02\u9014\u540c\u5f52","\u8863\u98df\u4f4f\u884c","\u4e49\u6b63\u8f9e\u7ea6","\u4e00\u5bb6\u4e4b\u4f5c","\u4e00\u5531\u4e09\u53f9","\u8863\u9526\u663c\u884c","\u4e00\u6a21\u4e00\u6837","\u4e00\u65e0\u6240\u80fd","\u4ee5\u8a89\u8fdb\u80fd","\u7591\u56e2\u6ee1\u8179","\u4e00\u624b\u72ec\u62cd","\u4e00\u5410\u4e3a\u5feb","\u79fb\u98ce\u5d07\u6559","\u501a\u7389\u504e\u9999","\u501a\u59e3\u4f5c\u5a9a","\u4ee5\u4e3a\u540e\u56fe","\u4e00\u8def\u98ce\u6e05","\u4e00\u5bb6\u4e00\u706b","\u4ee5\u706b\u6551\u706b","\u4e00\u5914\u5df2\u8db3","\u4e00\u624b\u4e00\u8db3","\u8d3b\u53a5\u5b59\u8c0b","\u4e00\u90b1\u4e4b\u8c89","\u4e00\u8bed\u53cc\u5173","\u4ee5\u6307\u6320\u6cb8","\u4ee5\u6c64\u6b62\u6cb8","\u4ee5\u6c64\u6c83\u6cb8","\u4ee5\u706b\u6b62\u6cb8","\u4f9d\u4e31\u9644\u6728","\u4ee5\u7c7b\u76f8\u4ece","\u58f9\u5021\u4e09\u53f9","\u8863\u9526\u98df\u8089","\u4ee5\u610f\u4e3a\u4e4b","\u4e00\u5dee\u4e8c\u9519","\u4e00\u5dee\u534a\u9519","\u4e00\u8eab\u4e8c\u4efb","\u8681\u6597\u8717\u4e89","\u4e00\u5b57\u4e0d\u82df","\u4ee5\u552e\u5176\u5978","\u4e00\u7247\u4e39\u5fc3","\u4e00\u7ebf\u4e4b\u8def","\u4ee5\u591c\u7ee7\u65e5","\u4f9d\u963f\u53d6\u5bb9","\u5f02\u5730\u76f8\u9022","\u4e00\u5c81\u518d\u8d66","\u4e00\u5c81\u8f7d\u8d66","\u6ea2\u7f8e\u6ea2\u6076","\u4e00\u52b3\u4e45\u9038","\u4ea6\u590d\u5982\u662f","\u4e00\u80a1\u8111\u513f","\u4e00\u4eba\u5584\u5c04","\u4e00\u4e3e\u4e09\u53cd","\u4e00\u7b14\u62b9\u6740","\u4ee5\u6740\u6b62\u6740","\u4ee5\u6028\u62a5\u5fb7","\u9057\u54c2\u5927\u65b9","\u4ee5\u591c\u7ee7\u663c","\u4ee5\u591c\u7eed\u663c","\u4ee5\u65e5\u7ee7\u591c","\u4e00\u957f\u4e00\u77ed","\u4e00\u957f\u4e24\u77ed","\u4e00\u957f\u4e8c\u77ed","\u4e00\u957f\u534a\u77ed","\u4e00\u65e5\u4e0d\u89c1","\u79fb\u5c71\u586b\u6d77","\u4e00\u6b65\u4e00\u9b3c","\u4ee5\u8001\u5356\u8001","\u501a\u8001\u5356\u8001","\u4f9d\u7fe0\u504e\u7ea2","\u4e00\u8109\u76f8\u4f20","\u4ee5\u5f80\u9274\u6765","\u4e00\u547d\u4e4b\u8363","\u4e00\u8a00\u4e2d\u7684","\u6613\u53e3\u4ee5\u98df","\u4e00\u91cd\u4e00\u63a9","\u4e00\u7ebf\u751f\u673a","\u9057\u81ed\u65e0\u7a77","\u4ee5\u5229\u7d2f\u5f62","\u4e00\u8def\u8d27\u8272","\u4e49\u5f62\u4e8e\u8272","\u4e00\u7537\u534a\u5973","\u9038\u5174\u4e91\u98de","\u7591\u795e\u7591\u9b3c","\u4e00\u5e72\u4eba\u72af","\u4e00\u5f0f\u4e00\u6837","\u4e00\u65e5\u4e07\u673a","\u4ee5\u51a0\u8865\u5c65","\u4e00\u62e5\u800c\u5165","\u4e00\u8868\u5802\u5802","\u4eea\u8868\u5802\u5802","\u4e00\u5fc3\u540c\u4f53","\u4e00\u6811\u767e\u83b7","\u4ee5\u5fb7\u8ffd\u7978","\u4e00\u82b1\u72ec\u653e","\u4e00\u53f6\u8ff7\u5c71","\u4e49\u6d77\u6069\u5c71","\u5f02\u4e4e\u5bfb\u5e38","\u4ee5\u6c34\u6551\u6c34","\u4ee5\u79c1\u5bb3\u516c","\u4e00\u79c9\u81f3\u516c","\u9057\u81ed\u4e07\u4e16","\u9057\u82ac\u5269\u99a5","\u501a\u5b98\u4ed7\u52bf","\u4e00\u95e8\u540c\u6c14","\u4e00\u4eba\u4e4b\u4e0b","\u858f\u82e1\u4e4b\u8c17","\u4ee5\u53e3\u95ee\u5fc3","\u4e00\u725b\u4e5d\u9501","\u9a7f\u4f7f\u6885\u82b1","\u4e00\u624b\u906e\u5929","\u79fb\u65e5\u535c\u591c","\u4e00\u65f6\u4e4b\u79c0","\u4e00\u541f\u4e00\u548f"],"yan":["\u96c1\u5854\u65b0\u9898","\u71d5\u5e55\u81ea\u5b89","\u71d5\u5de2\u5e55\u4e0a","\u70df\u971e\u75fc\u75be","\u8a00\u4e4b\u8c06\u8c06","\u71d5\u6b4c\u8d75\u821e","\u7814\u7cbe\u8983\u601d","\u71d5\u989d\u864e\u5934","\u8a00\u72b9\u5728\u8033","\u70df\u9500\u7070\u706d","\u8a00\u548c\u610f\u987a","\u8a00\u4e3a\u5fc3\u58f0","\u773c\u6025\u624b\u5feb","\u8a00\u5fc5\u6709\u4e2d","\u63a9\u9abc\u57cb\u7a86","\u8a00\u4e0d\u8fbe\u610f","\u773c\u82b1\u5fc3\u4e71","\u70df\u805a\u6ce2\u5c5e","\u989c\u7cbe\u67f3\u9aa8","\u71d5\u8bed\u83ba\u557c","\u8a00\u884c\u4e0d\u4e00","\u70df\u970f\u96fe\u96c6","\u8a00\u7b80\u610f\u8d45","\u4e25\u971c\u70c8\u65e5","\u70df\u6ce2\u6d69\u6e3a","\u8a00\u53d1\u7978\u968f","\u71d5\u7626\u73af\u80a5","\u5043\u6b66\u5174\u6587","\u5ef6\u9888\u8dc2\u8e35","\u63a9\u53e3\u5931\u58f0","\u96c1\u65ad\u9c7c\u6c89","\u5043\u9769\u5c1a\u6587","\u8a00\u5341\u5984\u4e5d","\u8a00\u7ea6\u65e8\u8fdc"],"chan":["\u5181\u7136\u800c\u7b11","\u8c04\u4e0a\u9a84\u4e0b","\u8749\u5598\u96f7\u5e72","\u8c04\u8bcd\u4ee4\u8272","\u8749\u7ffc\u4e3a\u91cd"],"po":["\u9b44\u6563\u9b42\u98d8","\u7834\u575a\u6467\u521a","\u7834\u74e6\u9893\u57a3","\u7834\u4ea7\u8361\u4e1a","\u7834\u70c2\u6d41\u4e22","\u7834\u77e9\u4e3a\u5706","\u9b44\u6563\u9b42\u6d88","\u7834\u5bb6\u7aed\u4ea7"],"jun":["\u5cfb\u5b87\u5f6b\u5899","\u5cfb\u5b87\u96d5\u5899","\u541b\u5b50\u534f\u5b9a"],"tou":["\u5077\u5b89\u65e6\u5915","\u6295\u818f\u6b62\u706b","\u5934\u660f\u76ee\u7729","\u5934\u7729\u76ee\u660f","\u5934\u4e0a\u672b\u4e0b","\u5077\u58f0\u7ec6\u6c14","\u5077\u5408\u82df\u4ece","\u5934\u75bc\u8111\u70ed","\u5077\u5929\u6362\u65e5","\u5934\u8db3\u5f02\u6240","\u6295\u77f3\u62d4\u8ddd"],"qi":["\u4e03\u76f8\u4e94\u516c","\u6c14\u6124\u586b\u81ba","\u5f03\u4e4b\u5ea6\u5916","\u9f50\u5fc3\u4f75\u529b","\u51c4\u98ce\u82e6\u96e8","\u9a91\u9f99\u5f04\u51e4","\u6c14\u51b2\u6597\u725b","\u5947\u79bb\u53e4\u602a","\u671f\u9890\u4e4b\u5bff","\u7eee\u7ea8\u4e4b\u5c81","\u6c14\u606f\u5944\u5944","\u4e03\u7a8d\u73b2\u73d1","\u6b67\u8def\u4ea1\u7f8a","\u4fdf\u6cb3\u4e4b\u6e05","\u4e03\u7a8d\u5192\u706b","\u6816\u51b2\u4e1a\u7b80","\u5f03\u82e5\u655d\u5c63","\u5f03\u7532\u4e22\u76d4","\u65d7\u9f13\u76f8\u5f53","\u6816\u4e18\u996e\u8c37","\u5668\u6ee1\u610f\u5f97","\u6c14\u903e\u9704\u6c49","\u5668\u5c0f\u6613\u76c8","\u4e03\u8db3\u516b\u624b","\u4e03\u957f\u516b\u77ed","\u51c4\u5165\u809d\u813e","\u5176\u8c8c\u4e0d\u626c","\u5f03\u672b\u53cd\u672c","\u4e03\u5634\u516b\u5f20","\u4e03\u635f\u516b\u76ca","\u6ce3\u8840\u6376\u81ba","\u4e5e\u513f\u9a6c\u533b","\u5c90\u51fa\u5c90\u5165","\u4e03\u5b50\u516b\u5a7f","\u59bb\u6885\u5b50\u9e64","\u4e03\u4e8b\u516b\u4e8b","\u6c14\u5fcd\u58f0\u541e","\u6c14\u65ad\u58f0\u541e","\u59bb\u8363\u592b\u8d35","\u8d77\u6b7b\u56de\u751f"],"jia":["\u9a7e\u8f7b\u5c31\u719f","\u52a0\u819d\u5760\u6e0a","\u5bb6\u5b66\u6e0a\u6e90","\u988a\u4e0a\u4e09\u6beb","\u67b6\u80a9\u51fb\u6bc2","\u5bb6\u5e38\u4fbf\u996d","\u67b6\u8c0e\u51ff\u7a7a","\u5bb6\u7834\u4eba\u4ea1","\u631f\u7ec6\u62ff\u7c97","\u5ac1\u72d7\u968f\u72d7","\u5ac1\u9e21\u968f\u9e21","\u621b\u7136\u800c\u6b62","\u5609\u8a00\u5584\u72b6","\u5047\u4ec1\u5047\u4e49"],"de":["\u5fb7\u914d\u5929\u5730","\u5fb7\u5bb9\u8a00\u529f","\u5f97\u5931\u5728\u4eba","\u5f97\u610f\u5fd8\u8a00","\u5f97\u9a6c\u5931\u9a6c"],"die":["\u8dcc\u8361\u4e0d\u7f81","\u8fed\u5d82\u5c42\u5ce6","\u8fed\u77e9\u91cd\u89c4","\u53e0\u5d82\u5c42\u5ce6"],"bie":["\u522b\u6709\u98ce\u5473","\u522b\u6709\u80ba\u80a0","\u522b\u7c7b\u5206\u95e8","\u522b\u6709\u4eba\u95f4","\u522b\u5f00\u4e00\u683c"],"zhuan":["\u8f6c\u6597\u5343\u91cc","\u8f6c\u5fe7\u4e3a\u559c","\u8f6c\u55d4\u4e3a\u559c","\u8f6c\u60b2\u4e3a\u559c"],"feng":["\u98ce\u8f66\u96e8\u9a6c","\u51af\u5510\u5934\u767d","\u4e30\u808c\u5f31\u9aa8","\u98ce\u53e3\u6d6a\u5c16","\u98ce\u58f0\u9e64\u5533","\u98ce\u9aa8\u5ced\u5cfb","\u98ce\u95e8\u6c34\u53e3","\u51e4\u9e23\u9e64\u5533","\u51e4\u821e\u9f99\u87e0","\u98ce\u5439\u6d6a\u6253","\u8702\u5c6f\u8681\u6742","\u4e30\u7b4b\u591a\u529b","\u98ce\u6d41\u5343\u53e4","\u5949\u8f9e\u4f10\u7f6a","\u4e30\u8349\u957f\u6797","\u98ce\u8d77\u4e91\u6d8c","\u51af\u5510\u5df2\u8001","\u51af\u5510\u6613\u8001","\u8702\u62e5\u8681\u5c6f","\u98ce\u5200\u971c\u5251","\u98ce\u60c5\u6708\u610f","\u98ce\u70db\u8349\u9732","\u4e30\u5c4b\u4e4b\u7978","\u5c01\u5b98\u8bb8\u539f"],"ba":["\u62d4\u6bdb\u8fde\u8339","\u62d4\u5341\u5931\u4e94","\u62d4\u6765\u62a5\u5f80","\u62d4\u5730\u501a\u5929","\u62d4\u8305\u8fde\u8339","\u62d4\u4e1b\u51fa\u7c7b"],"jing":["\u60ca\u7687\u5931\u63aa","\u60ca\u6050\u4e07\u72b6","\u656c\u8001\u6148\u5c11","\u60ca\u5fc3\u60b2\u9b44","\u656c\u65f6\u7231\u65e5","\u7cbe\u8015\u7ec6\u4f5c","\u7cbe\u5999\u7edd\u4f26","\u7cbe\u7f8e\u7edd\u4f26","\u4e95\u4e2d\u6c42\u706b","\u7ecf\u6587\u7eac\u6b66","\u4e95\u4e2d\u89c6\u661f","\u61ac\u7136\u6709\u609f","\u7cbe\u5f69\u903c\u4eba","\u60ca\u91c7\u7edd\u8273","\u5162\u5162\u6218\u6218","\u4e95\u5e95\u9e23\u86d9","\u4e95\u86d9\u4e4b\u89c1","\u656c\u8d24\u91cd\u58eb","\u60ca\u611a\u9a87\u4fd7","\u60ca\u5fc3\u4e27\u9b44","\u60ca\u9b42\u593a\u9b44","\u9cb8\u5438\u725b\u996e","\u656c\u4e0a\u7231\u4e0b","\u7ecf\u5e74\u7d2f\u6708","\u955c\u91cc\u89c2\u82b1"],"bu":["\u4e0d\u538c\u5176\u7e41","\u4e0d\u8fdc\u5343\u91cc","\u4e0d\u557b\u5929\u6e0a","\u4e0d\u5b81\u552f\u662f","\u4e0d\u7fd2\u6c34\u571f","\u4e0d\u62d8\u7ec6\u8282","\u4e0d\u4ee5\u89c4\u77e9","\u4e0d\u4e4f\u5148\u4f8b","\u4e0d\u4e00\u800c\u8db3","\u4e0d\u4e09\u4e0d\u56db","\u4e0d\u4e0a\u4e0d\u4e0b","\u4e0d\u4e0a\u4e0d\u843d","\u4e0d\u4e16\u4e4b\u4e1a","\u4e0d\u4e16\u4e4b\u529f","\u4e0d\u4e30\u4e0d\u4fed","\u4e0d\u4e30\u4e0d\u6740","\u4e0d\u4e3a\u5df2\u751a","\u4e0d\u53ef\u4e61\u8fe9","\u4e0d\u8fc1\u4e4b\u5e99","\u4e0d\u4e86\u800c\u4e86","\u4e0d\u751a\u4e86\u4e86","\u4e0d\u5b89\u5176\u5ba4","\u4e0d\u53ef\u8a00\u72b6","\u4e0d\u9f9f\u624b\u836f","\u4e0d\u7701\u4eba\u4e8b","\u4e0d\u803b\u6700\u540e","\u4e0d\u9051\u5b81\u606f","\u4e0d\u80dc\u5176\u4efb","\u4e0d\u987e\u6b7b\u6d3b","\u4e0d\u7edd\u5982\u7ebf","\u4e0d\u9634\u4e0d\u9633","\u4e0d\u77e5\u8089\u5473","\u4e0d\u4e8c\u6cd5\u95e8","\u4e0d\u53ef\u80dc\u8bb0","\u6b65\u5c65\u7ef4\u8270","\u4e0d\u582a\u9020\u5c31","\u4e0d\u5fcd\u5352\u8bfb","\u6b65\u6597\u8e0f\u7f61","\u4e0d\u6562\u81ea\u4e13","\u4e0d\u503c\u4e00\u987e","\u4e0d\u503c\u4e00\u9a73","\u4e0d\u901a\u6c34\u706b","\u4e0d\u907f\u6c34\u706b","\u4e0d\u907f\u6c64\u706b","\u4e0d\u98df\u70df\u706b","\u4e0d\u52a1\u6b63\u4e1a","\u4e0d\u75be\u4e0d\u5f90","\u4e0d\u58f9\u800c\u8db3","\u4e0d\u8bb3\u4e4b\u95e8","\u4e0d\u582a\u5165\u8033","\u4e0d\u95f4\u4e0d\u754c","\u4e0d\u8bc6\u9a6c\u809d","\u4e0d\u8fb1\u4f7f\u547d","\u4e0d\u77e5\u6240\u9519","\u5e03\u8863\u7c9d\u98df","\u4e0d\u8bc6\u9ad8\u4f4e","\u4e0d\u62a4\u7ec6\u884c","\u4e0d\u723d\u7d2f\u9ecd","\u4e0d\u5351\u4e0d\u4ea2","\u4e0d\u53ef\u7ec8\u65e5","\u4e0d\u89c1\u5929\u65e5","\u4e0d\u6d4b\u4e4b\u7f6a","\u4e0d\u9f7f\u4e8e\u4eba","\u4e0d\u6559\u800c\u6740","\u4e0d\u5206\u8f69\u8f7e","\u4e0d\u6320\u4e0d\u6298","\u4e0d\u820d\u663c\u591c","\u8865\u5929\u6d74\u65e5","\u4e0d\u5f53\u4e0d\u6b63","\u4e0d\u6b21\u4e4b\u4f4d","\u4e0d\u7ecf\u4e16\u6545","\u4e0d\u77e5\u5bdd\u98df","\u4e0d\u7f9e\u5f53\u9762","\u4e0d\u8bc6\u5c40\u9762","\u4e0d\u52a8\u58f0\u8272","\u4e0d\u9732\u58f0\u8272","\u4e0d\u9732\u5f62\u8272","\u4e0d\u9732\u795e\u8272","\u4e0d\u65f6\u4e4b\u987b","\u4e0d\u670d\u6c34\u571f","\u4e0d\u8bc6\u5927\u4f53","\u4e0d\u89e3\u4e4b\u7f18","\u4e0d\u6d4b\u4e4b\u7978","\u4e0d\u8129\u8fb9\u5e45","\u4e0d\u53ef\u63c6\u5ea6","\u4e0d\u671f\u800c\u9047","\u4e0d\u8bc6\u6cf0\u5c71","\u4e0d\u6127\u5c4b\u6f0f","\u4e0d\u6b3a\u5c4b\u6f0f","\u4e0d\u4f26\u4e0d\u7c7b","\u4e0d\u77e5\u4e16\u52a1","\u4e0d\u63ea\u4e0d\u63a1"],"wang":["\u671b\u5c18\u62dc\u4f0f","\u671b\u5176\u80a9\u9879","\u5984\u751f\u7a7f\u51ff","\u4ea1\u9b42\u4e27\u9b44","\u5f80\u8fd4\u5f92\u52b3","\u6789\u8d39\u5de5\u592b","\u6c6a\u6d0b\u5927\u8086","\u6c6a\u6d0b\u81ea\u8086","\u6789\u53e3\u62d4\u820c","\u6c6a\u6d0b\u95f3\u8086","\u671b\u6d0b\u800c\u53f9"],"zhao":["\u7167\u529f\u884c\u8d4f","\u62db\u519b\u4e70\u9a6c","\u62db\u707e\u60f9\u7978","\u62db\u707e\u63fd\u7978"],"liang":["\u4e24\u76f8\u60c5\u613f","\u4e24\u6b21\u4e09\u756a","\u4e24\u4e16\u4e3a\u4eba","\u826f\u83a0\u6dc6\u6742","\u826f\u5f13\u65e0\u6539","\u826f\u836f\u82e6\u53e3","\u4e24\u80a9\u8377\u53e3","\u7cae\u5c3d\u63f4\u7edd","\u4e24\u5934\u4e09\u9762"],"jin":["\u8fdb\u8d24\u8fbe\u80fd","\u8fdb\u53ef\u66ff\u4e0d","\u8fdb\u4fef\u9000\u4fef","\u8fdb\u5229\u9664\u5bb3","\u8fdb\u53ef\u66ff\u5426","\u8fdb\u5584\u60e9\u5978","\u8fdb\u5584\u60e9\u6076","\u8fdb\u5584\u9000\u6076","\u8fdb\u5584\u9edc\u6076","\u8fdb\u58e4\u5e7f\u5730","\u8fdb\u5bf8\u9000\u5c3a","\u91d1\u5c3d\u88d8\u5f0a","\u9526\u7bc7\u7ee3\u5e19","\u91d1\u5b57\u62db\u724c","\u8fdb\u9000\u6d88\u957f","\u91d1\u77f3\u4e4b\u8a00","\u7981\u6b62\u4ee4\u884c","\u91d1\u9cf7\u64d8\u6d77","\u9526\u56ca\u5999\u8ba1","\u8fdb\u8d24\u9edc\u4f5e","\u9526\u8863\u884c\u663c","\u9526\u8863\u7389\u98df","\u7981\u820d\u5f00\u585e","\u91d1\u79d1\u7389\u5f8b","\u9526\u56e2\u82b1\u7c07"],"shi":["\u5341\u62cf\u4e5d\u7a33","\u89c6\u6b7b\u5982\u9974","\u9002\u4fd7\u968f\u65f6","\u72e7\u7a45\u53ca\u7c73","\u89c6\u5982\u655d\u5c63","\u5c38\u6a2a\u904d\u91ce","\u5c38\u7984\u7d20\u9910","\u55dc\u6740\u6210\u6027","\u77e2\u53e3\u5426\u8ba4","\u89c6\u800c\u4e0d\u89c1","\u4e8b\u7f13\u5219\u5706","\u4f7f\u8d24\u4efb\u80fd","\u5931\u60ca\u5012\u602a","\u5931\u60ca\u6253\u602a","\u4e8b\u5728\u8427\u5899","\u566c\u8110\u65e0\u53ca","\u5ba4\u5982\u60ac\u7f44","\u8c55\u7a9c\u72fc\u900b","\u9002\u5f53\u5176\u51b2","\u5931\u9b42\u8361\u9b44","\u8a93\u6b7b\u4e0d\u6e1d","\u5c4e\u6d41\u5c41\u6eda","\u77f3\u70c2\u6d77\u67af","\u5341\u5b57\u8857\u53e3","\u5341\u5b57\u8def\u53e3","\u5341\u4e07\u706b\u6025","\u4f7f\u5fc3\u4f5c\u5016","\u9002\u6750\u9002\u6240","\u52bf\u5982\u7834\u7af9","\u5341\u6076\u4e0d\u8d66","\u52bf\u7a77\u529b\u5c48","\u5341\u91cc\u957f\u4ead","\u98df\u65b9\u4e8e\u524d","\u9002\u5fc3\u5a31\u76ee","\u5341\u9762\u57cb\u4f0f","\u98df\u4eb2\u8d22\u9ed1","\u8210\u76ae\u8bba\u9aa8","\u8bd7\u60c5\u753b\u610f","\u5931\u4e4b\u6beb\u5398","\u5341\u5bd2\u4e00\u66b4","\u89c6\u540c\u8def\u4eba","\u4f7f\u868a\u8d1f\u5c71","\u5341\u592b\u6861\u690e","\u5341\u592b\u697a\u690e","\u5e02\u4e95\u4e4b\u81e3","\u5341\u4e4b\u516b\u4e5d","\u5341\u6709\u516b\u4e5d","\u52bf\u503e\u671d\u91ce","\u4e8b\u51fa\u6709\u56e0","\u5e08\u8001\u5175\u7834","\u65f6\u8fd0\u4ea8\u901a"],"bei":["\u88ab\u53d1\u6587\u8eab","\u500d\u9053\u517c\u8fdb","\u500d\u9053\u800c\u8fdb","\u60b2\u6b22\u79bb\u5408","\u676f\u5f13\u5e02\u864e","\u5351\u8eab\u8d31\u4f53","\u80cc\u516c\u8425\u79c1","\u500d\u65e5\u5e76\u884c","\u5317\u9119\u4e4b\u58f0","\u4ffe\u591c\u4f5c\u663c","\u4ffe\u663c\u4f5c\u591c","\u5351\u8eab\u5c48\u4f53","\u5351\u793c\u539a\u5e01"],"long":["\u9f99\u76d8\u51e4\u7fe5","\u9f99\u96cf\u51e4\u79cd","\u9f99\u98de\u51e4\u7fe5","\u9f99\u76d8\u864e\u62cf","\u9f99\u9aa7\u51e4\u77eb","\u9f99\u7741\u864e\u773c","\u9f99\u86c7\u6df7\u6742","\u9f99\u809d\u51e4\u8111","\u9f99\u9633\u6ce3\u9c7c","\u804b\u8005\u4e4b\u6b4c","\u9f99\u697c\u51e4\u9619"],"bin":["\u5bbe\u5165\u5982\u5f52"],"jian":["\u89c1\u4e4b\u4e0d\u53d6","\u517c\u7a0b\u524d\u8fdb","\u517c\u7a0b\u5e76\u8fdb","\u9274\u524d\u6bd6\u540e","\u575a\u7532\u5229\u5203","\u517c\u89c8\u535a\u7167","\u80a9\u6469\u6bc2\u63a5","\u89c1\u730e\u5fc3\u559c","\u8df5\u5f8b\u8e48\u793c","\u89c1\u5375\u6c42\u9e21","\u89c1\u60ef\u4e0d\u60ca","\u5efa\u529f\u7acb\u4e8b","\u526a\u53d1\u675c\u95e8","\u8270\u96be\u56f0\u82e6","\u95f4\u4e0d\u5bb9\u783a","\u8d31\u5165\u8d35\u51fa","\u575a\u6267\u4e0d\u4ece","\u8270\u6df1\u6666\u6da9","\u517c\u5bb9\u5e76\u5305","\u575a\u5fcd\u4e0d\u62d4","\u5978\u63b3\u70e7\u6740","\u5251\u9996\u4e00\u5437","\u8e47\u4eba\u5347\u5929","\u89c1\u5f02\u601d\u8fc1","\u7b80\u5207\u4e86\u5f53","\u89c1\u5154\u653e\u9e70","\u526a\u53d1\u88ab\u8910","\u7b80\u4e1d\u6570\u7c73","\u517c\u6536\u5e76\u5f55","\u89c1\u54ed\u5174\u60b2"],"shun":["\u987a\u6211\u8005\u660c","\u987a\u98ce\u4f7f\u5e06","\u987a\u9053\u8005\u660c"],"xin":["\u5fc3\u76f4\u5634\u5feb","\u5fc3\u670d\u53e3\u670d","\u5fc3\u53e3\u5982\u4e00","\u5fc3\u5bd2\u80c6\u6218","\u5fc3\u8fa3\u624b\u72e0","\u5fc3\u6709\u4f59\u60b8","\u5fc3\u65e0\u4e8c\u7528","\u5fc3\u8179\u4e4b\u4ea4","\u5fc3\u5411\u5f80\u4e4b","\u5fc3\u60ca\u8089\u8df3","\u5fc3\u6148\u624b\u8f6f","\u5fc3\u7518\u60c5\u539f","\u5fc3\u9886\u795e\u609f","\u5fc3\u76f4\u53e3\u5feb","\u8845\u7a14\u6076\u76c8","\u5fc3\u7ec6\u4e8e\u53d1","\u5fc3\u5fc3\u76f8\u5370","\u5fc3\u52b3\u610f\u5197","\u6b23\u559c\u82e5\u72c2","\u4fe1\u624b\u62c8\u6765","\u5fc3\u6d3b\u9762\u8f6f","\u5fc3\u7ec7\u7b14\u8015","\u5fc3\u7c97\u6c14\u6d6e","\u5fc3\u82b1\u6012\u653e","\u5fc3\u975e\u5df7\u8bae"],"bai":["\u767e\u601d\u4e0d\u89e3","\u767e\u82b1\u751f\u65e5","\u767d\u5154\u8d64\u4e4c","\u767e\u8651\u4e00\u81f4","\u8d25\u5316\u4f24\u98ce","\u767d\u9762\u4e66\u751f","\u767d\u65e5\u89c1\u9b3c","\u767d\u74a7\u4e09\u732e","\u767d\u7389\u5fae\u7455","\u62dc\u9b3c\u6c42\u795e","\u767e\u8863\u767e\u968f","\u767e\u4e0d\u4e00\u8d37","\u767d\u5934\u4e4b\u53f9","\u767e\u6298\u5343\u56de","\u767e\u4e0d\u83b7\u4e00","\u767e\u5815\u4ff1\u4e3e","\u767d\u9a79\u7a7a\u8c37","\u8d25\u6cd5\u4e71\u7eaa","\u767e\u82b1\u9f50\u653e"],"gong":["\u529f\u9042\u8eab\u9000","\u653b\u5176\u65e0\u5907","\u516c\u6b63\u5ec9\u6d01","\u516c\u5c14\u5fd8\u79c1","\u529f\u5fb7\u65e0\u91cf","\u5171\u4e3a\u5507\u9f7f","\u516c\u79c1\u517c\u987e"],"dao":["\u5012\u7f6e\u5e72\u6208","\u5200\u5149\u5251\u5f71","\u76d7\u6028\u4e3b\u4eba","\u9053\u5fb7\u6587\u7ae0","\u9053\u65e0\u62fe\u9057","\u8e48\u673a\u63e1\u677c","\u8e48\u706b\u63a2\u6c64","\u8e48\u706b\u8d74\u6c64","\u76d7\u94c3\u63a9\u8033","\u9053\u6ba3\u76f8\u6795","\u6363\u865a\u6487\u6297","\u9053\u508d\u82e6\u674e","\u8e48\u88ad\u524d\u4eba","\u9053\u4e0d\u4e3e\u9057","\u5200\u4e0b\u7559\u4eba","\u9053\u8c8c\u4fe8\u7136","\u5c9b\u7626\u90ca\u5bd2","\u9053\u5728\u5c4e\u6eba","\u5012\u679c\u4e3a\u56e0"],"qing":["\u6e05\u98ce\u6717\u6708","\u503e\u8033\u7ec6\u542c","\u8f7b\u8d4b\u8584\u655b","\u9752\u5dde\u4ece\u4e8b","\u8f7b\u8d22\u656c\u58eb","\u6e05\u7070\u51b7\u706b","\u6e05\u6e90\u6b63\u672c","\u60c5\u6587\u5e76\u8302","\u9752\u8747\u540a\u5ba2","\u6e05\u5fae\u6de1\u8fdc","\u8f7b\u9976\u7d20\u653e","\u60c5\u4e0d\u81ea\u5df2","\u78ec\u77f3\u4e4b\u56fa","\u9752\u8fc7\u4e8e\u84dd","\u60c5\u91cd\u59dc\u80b1"],"kou":["\u53e3\u8c10\u8f9e\u7ed9","\u53e3\u76f4\u5fc3\u5feb","\u53e3\u4f20\u5fc3\u6388","\u53e3\u662f\u5fc3\u975e","\u53e3\u8bb2\u6307\u753b"],"fa":["\u53d1\u4e0a\u6307\u51a0","\u4f10\u529f\u77dc\u80fd","\u6cd5\u8109\u51c6\u7ef3","\u4f10\u6bdb\u6362\u9ad3","\u4f10\u6bdb\u6d17\u9ad3","\u53d1\u5baa\u5e03\u4ee4","\u53d1\u8499\u89e3\u7f1a","\u53d1\u4eba\u6df1\u7701","\u53d1\u8a00\u76c8\u5ead"],"fu":["\u6d6e\u5149\u8dc3\u91d1","\u6d6e\u6e5b\u8fde\u8e47","\u6276\u5371\u62ef\u6eba","\u51eb\u8d8b\u96c0\u8dc3","\u8d1f\u963b\u4e0d\u5bbe","\u5b5a\u5c39\u65c1\u8fbe","\u8d1f\u6069\u80cc\u4e49","\u80a4\u5bf8\u800c\u5408","\u7236\u4e3a\u5b50\u9690","\u629a\u4eca\u8ffd\u6614","\u6d6e\u5149\u63a0\u5f71","\u6874\u9f13\u76f8\u5e94","\u8986\u53bb\u7ffb\u6765","\u5987\u59d1\u52c3\u6eaa","\u7236\u6bcd\u6069\u52e4","\u9644\u7ffc\u6500\u9cde","\u9644\u9aa5\u6500\u9cde","\u8d1f\u9669\u4e0d\u5bbe","\u4ed8\u8bf8\u4e00\u70ac","\u9644\u58f0\u5420\u5f71","\u8179\u70ed\u80a0\u8352","\u8986\u6c34\u96be\u6536","\u6276\u5899\u6478\u58c1","\u5bcc\u5546\u5de8\u8d3e","\u9644\u5eb8\u98ce\u96c5","\u6d6e\u8ff9\u6d6a\u8e2a","\u6577\u884d\u585e\u8d23","\u6276\u5371\u6551\u56f0","\u91dc\u5e95\u6e38\u9b42","\u4fef\u9996\u542c\u547d","\u798f\u5730\u6d1e\u5929","\u8d1f\u5fb7\u5b64\u6069","\u6d6e\u540d\u865a\u8a89","\u4fef\u9996\u8d34\u8033"],"sao":["\u9a9a\u7fc1\u58a8\u5ba2","\u6414\u9996\u8e1f\u8e70","\u626b\u5730\u65e0\u9057"],"jie":["\u89e3\u5175\u91ca\u7532","\u8282\u5916\u751f\u679d","\u501f\u8d37\u65e0\u95e8","\u7aed\u667a\u5c3d\u5fe0","\u89e3\u7532\u5f52\u7530","\u501f\u5c38\u8fd8\u9b42","\u89e3\u6c11\u5012\u60ac"],"hong":["\u54c4\u5802\u5927\u7b11","\u9e3f\u6848\u76f8\u5e84","\u70d8\u6258\u6e32\u67d3","\u9e3f\u6d88\u9ca4\u606f","\u7ea2\u7c89\u9752\u697c","\u9e3f\u90fd\u4e70\u7b2c","\u9e3f\u9db1\u51e4\u901d","\u95f3\u4e2d\u8086\u5916"],"she":["\u8d66\u8fc7\u5ba5\u7f6a","\u86c7\u874e\u5fc3\u80a0","\u6444\u5a01\u64c5\u52bf","\u8bbe\u5fc3\u79ef\u8651","\u6444\u9b44\u94a9\u9b42","\u86c7\u98df\u9cb8\u541e"],"mei":["\u7709\u6765\u773c\u53bb","\u6ca1\u5b8c\u6ca1\u4e86","\u7709\u5934\u773c\u5c3e","\u6ca1\u65e5\u6ca1\u591c","\u6ca1\u5c4b\u67b6\u6881","\u6ca1\u53ef\u5948\u4f55","\u7f8e\u610f\u5ef6\u5e74","\u8882\u4e91\u6c57\u96e8"],"pan":["\u5224\u82e5\u5929\u6e0a","\u6500\u82b1\u95ee\u67f3","\u6500\u87fe\u6298\u6842","\u6500\u9ad8\u63a5\u8d35","\u6500\u82b1\u6298\u67f3","\u76d8\u9f99\u5367\u864e"],"ru":["\u5982\u4e34\u6df1\u6e0a","\u5982\u864e\u5f97\u7ffc","\u5982\u9189\u65b9\u9192","\u5165\u5ba4\u6607\u5802","\u5982\u864e\u6dfb\u7ffc","\u5982\u98ce\u8fc7\u8033","\u5165\u5730\u65e0\u95e8","\u5165\u706b\u8d74\u6c64","\u5982\u5f03\u655d\u5c63","\u5165\u5ba4\u5347\u5802","\u5982\u89e3\u5012\u60ac","\u5982\u632f\u843d\u53f6","\u5982\u9189\u521d\u9192"],"cun":["\u5bf8\u6307\u6d4b\u6e0a","\u6751\u54e5\u91cc\u5987","\u5bf8\u7537\u5c3a\u5973"],"ri":["\u65e5\u8584\u865e\u6e0a","\u65e5\u5347\u6708\u6052","\u65e5\u996e\u65e0\u4f55","\u65e5\u4e2d\u5c06\u6603","\u65e5\u5f80\u6708\u6765","\u65e5\u4e2d\u5fc5\u6603","\u65e5\u6708\u65e0\u5149","\u65e5\u65f0\u5fd8\u9910","\u65e5\u843d\u897f\u5c71","\u65e5\u4e0d\u6687\u7ed9","\u65e5\u4e2d\u5219\u6603","\u65e5\u4e2d\u5fc5\u5f57","\u65e5\u5750\u6101\u57ce","\u65e5\u4e7e\u5915\u60d5","\u65e5\u7701\u6708\u8bfe","\u65e5\u524a\u6708\u5272","\u65e5\u9500\u6708\u94c4"],"ji":["\u79ef\u6c34\u6210\u6e0a","\u6fc0\u6d4a\u626c\u6e05","\u6781\u5219\u5fc5\u53cd","\u6d4e\u4e16\u5b89\u6c11","\u79ef\u8c17\u7cdc\u9aa8","\u96c6\u814b\u4e3a\u88d8","\u8ba1\u529f\u884c\u5c01","\u5409\u7965\u6b62\u6b62","\u6781\u6df1\u7814\u51e0","\u5bc4\u4eba\u7bf1\u4e0b","\u8ba1\u65e0\u6240\u4e4b","\u9965\u4e0d\u9051\u98df","\u9e21\u72ac\u4e0d\u60ca","\u5373\u5174\u4e4b\u4f5c","\u9965\u9971\u52b3\u5f79","\u7b95\u5f15\u88d8\u968f","\u79ef\u91cd\u96be\u53cd","\u8ba1\u65e5\u4ee5\u671f","\u6025\u6775\u6363\u5fc3","\u6025\u4eba\u4e4b\u56f0","\u96c6\u8424\u6620\u96ea","\u673a\u4e0d\u65cb\u8e35","\u6781\u6076\u4e0d\u8d66","\u9965\u5bd2\u4ea4\u5207","\u75be\u6076\u5982\u98ce","\u79ef\u4e60\u6210\u4fd7","\u6781\u5f80\u77e5\u6765","\u6025\u4e0d\u62e9\u8a00","\u9e21\u72ac\u5347\u5929","\u9e21\u9e23\u998c\u8015","\u6025\u516c\u597d\u65bd","\u9e21\u9e23\u72d7\u76d7","\u53ca\u6eba\u547c\u8239","\u79ef\u6c99\u6210\u5854","\u96c6\u814b\u6210\u88d8","\u7578\u6d41\u9038\u5ba2","\u7620\u725b\u7fb8\u8c5a","\u6324\u7709\u6e9c\u773c","\u7a3d\u53e4\u632f\u4eca"],"zi":["\u81ea\u4e0d\u5f85\u8a00","\u81ea\u4e0d\u91cf\u529b","\u81ea\u4e1a\u81ea\u5f97","\u81ea\u4ee5\u4e3a\u662f","\u81ea\u4f5c\u4e3b\u5f20","\u81ea\u4f5c\u806a\u660e","\u81ea\u4f5c\u81ea\u53d7","\u81ea\u4f5c\u89e3\u4eba","\u81ea\u4f5c\u95e8\u6237","\u81ea\u76f8\u9c7c\u8089","\u81ea\u6127\u4e0d\u5982","\u5179\u4e8b\u4f53\u5927","\u81ea\u8bd2\u4f0a\u621a","\u5b5c\u5b5c\u4ee5\u6c42","\u81ea\u6551\u4e0d\u6687","\u5b5c\u5b5c\u4e0d\u8f8d","\u5b57\u987a\u6587\u4ece","\u81ea\u5f3a\u4e0d\u606f","\u5431\u54e9\u54c7\u5566","\u81ea\u5d16\u800c\u53cd","\u81ea\u76f8\u60ca\u5fe7","\u81ea\u547d\u6e05\u9ad8"],"cuo":["\u9519\u7efc\u590d\u6742","\u9519\u843d\u6709\u81f4"],"zhong":["\u5fe0\u4e0d\u907f\u5371","\u4f17\u5ddd\u8d74\u6d77","\u5fe0\u809d\u4e49\u80c6","\u4f17\u53e3\u5982\u4e00","\u4f17\u591a\u975e\u4e00","\u4f17\u661f\u62f1\u6781","\u4f17\u6028\u4e4b\u7684","\u7ec8\u7109\u4e4b\u5fd7","\u91cd\u4e49\u8f7b\u751f","\u4f17\u72ac\u5420\u58f0","\u91cd\u91d1\u88ad\u6c64","\u4f17\u76ee\u662d\u5f70","\u7ec8\u59cb\u4e0d\u6e1d","\u8e35\u8ff9\u76f8\u63a5","\u91cd\u8db3\u5c4f\u606f","\u51a2\u4e2d\u67af\u9aa8","\u4f17\u53e3\u4ea4\u4f20","\u4f17\u5fd7\u6210\u57ce","\u4f17\u55a3\u6f02\u5c71","\u4f17\u55a3\u98d8\u5c71"],"ming":["\u547d\u8f9e\u9063\u610f","\u547d\u8bcd\u9063\u610f","\u540d\u6807\u9752\u53f2","\u540d\u626c\u56db\u6d77","\u540d\u5c71\u4e8b\u4e1a","\u660e\u76ee\u8fbe\u806a","\u9e23\u9e64\u4e4b\u5e94","\u660e\u7738\u5584\u7750","\u660e\u7a97\u51c0\u51e0","\u660e\u5a92\u6b63\u793c","\u540d\u9ad8\u5929\u4e0b","\u660e\u7738\u7693\u9f7f","\u660e\u5211\u4e0d\u622e","\u540d\u95e8\u4e16\u65cf","\u660e\u955c\u9ad8\u60ac","\u9e23\u7389\u66f3\u7ec4"],"xue":["\u8840\u8ff9\u6591\u6591","\u5b66\u8001\u4e8e\u5e74","\u5b66\u7a76\u5929\u4eba","\u96ea\u4e2d\u9001\u70ad","\u96ea\u9b13\u971c\u6bdb","\u96ea\u5146\u4e30\u5e74","\u8840\u8089\u76f8\u8fde","\u524a\u804c\u4e3a\u6c11"],"qian":["\u8c26\u8eac\u4e0b\u58eb","\u5343\u4e86\u767e\u4e86","\u5343\u4e86\u767e\u5f53","\u5343\u5343\u4e07\u4e07","\u5343\u8f7d\u96be\u9022","\u5343\u8f9b\u4e07\u82e6","\u524d\u8dcb\u540e\u7590","\u5343\u5947\u767e\u602a","\u6d45\u5c1d\u8f84\u6b62","\u5343\u9524\u767e\u70bc","\u8c26\u865a\u8c28\u614e","\u5343\u75ae\u767e\u5b54","\u7275\u80a0\u5272\u809a","\u5343\u7bc7\u4e00\u5f8b","\u5343\u5dee\u4e07\u9519","\u5343\u72b6\u4e07\u6001","\u5343\u8a00\u4e07\u8bed","\u5343\u94a7\u4e00\u53d1","\u5343\u79cb\u4e07\u53e4","\u94b3\u53e3\u7ed3\u820c","\u5343\u96be\u4e07\u96be","\u5029\u5973\u79bb\u9b42","\u7275\u5f3a\u9644\u4f1a","\u524d\u4eba\u5931\u811a","\u5343\u707e\u767e\u96be","\u7275\u725b\u7ec7\u5973"],"bo":["\u4f2f\u6b4c\u5b63\u821e","\u62e8\u4e71\u6d4e\u5371","\u4f2f\u9053\u65e0\u513f","\u6ce2\u5149\u9cde\u9cde","\u535c\u591c\u535c\u663c","\u535c\u663c\u535c\u591c","\u6e24\u6fa5\u6851\u7530","\u62e8\u8349\u77bb\u98ce","\u535a\u53e4\u901a\u4eca"],"dan":["\u65e6\u65e6\u800c\u4f10","\u80c6\u7834\u5fc3\u5bd2","\u4e39\u5fc3\u5982\u6545","\u6b9a\u8bda\u6bd5\u8651","\u8bde\u5e7b\u4e0d\u7ecf","\u5f39\u51a0\u7ed3\u7ef6","\u62c5\u96ea\u586b\u4e95","\u4e39\u51e4\u671d\u9633","\u5f39\u51a0\u76f8\u5e86","\u5f39\u51a0\u632f\u887f","\u5355\u5200\u76f4\u5165","\u4e39\u5fc3\u78a7\u8840","\u6de1\u5986\u6d53\u62b9","\u5f39\u96e8\u67aa\u6797","\u80c6\u5927\u5fc3\u7ec6"],"tun":["\u5c6f\u8857\u585e\u5df7","\u541e\u821f\u662f\u6f0f"],"rong":["\u7194\u4eca\u94f8\u53e4","\u5bb9\u819d\u4e4b\u5730"],"shou":["\u624b\u811a\u5e72\u51c0","\u6536\u6210\u5f03\u8d25","\u6536\u56de\u6210\u547d","\u5b88\u8eab\u5982\u7389","\u624b\u9ad8\u624b\u4f4e","\u5b88\u571f\u6709\u8d23","\u5b88\u6b63\u4e0d\u6320","\u624b\u5fd9\u811a\u4e71","\u9996\u5c3e\u76f8\u536b","\u5b88\u5982\u5904\u5973","\u6388\u4e1a\u89e3\u60d1"],"di":["\u654c\u529b\u89d2\u6c14","\u7825\u783a\u540d\u8282","\u6da4\u6545\u66f4\u65b0","\u5730\u577c\u5929\u5d29","\u6da4\u79fd\u5e03\u65b0","\u6da4\u7455\u8361\u79fd","\u5730\u8001\u5929\u660f","\u7825\u8eab\u783a\u884c","\u5730\u7075\u4eba\u6770"],"ling":["\u51cc\u6742\u7c73\u76d0","\u51cc\u5f31\u66b4\u5be1","\u96f6\u73e0\u788e\u7389","\u51cc\u9704\u4e4b\u5fd7"],"fen":["\u5206\u9497\u7834\u955c","\u5206\u5bb6\u6790\u4ea7","\u6124\u65f6\u75be\u4fd7","\u5206\u95e8\u522b\u6237","\u711a\u6797\u800c\u730e","\u5206\u5de5\u5408\u4f5c","\u5206\u623f\u51cf\u53e3","\u5206\u8eab\u51cf\u53e3","\u6124\u6124\u4e0d\u5e73","\u711a\u6797\u800c\u7530","\u711a\u85ae\u800c\u7530","\u7eb7\u7eb7\u6d0b\u6d0b","\u5206\u4e09\u522b\u4e24","\u5206\u670b\u5f15\u7c7b","\u5206\u95e8\u522b\u7c7b","\u594b\u8d77\u76f4\u8ffd"],"jiu":["\u4e5d\u5929\u4ed9\u5973","\u4e5d\u4e5d\u5f52\u4e00","\u9152\u9163\u8033\u70ed","\u9152\u9189\u996d\u9971","\u4e45\u60ac\u4e0d\u51b3","\u9152\u98df\u5f81\u9010","\u65e7\u96e8\u4eca\u96e8","\u9e20\u50ed\u9e4a\u5de2","\u9152\u540e\u5931\u8a00","\u4e5d\u5b97\u4e03\u7956","\u6551\u706b\u626c\u6cb8","\u6551\u8fc7\u4e0d\u7ed9","\u4e5d\u95f4\u5927\u6bbf","\u65e7\u5ff5\u590d\u840c","\u4e45\u5f52\u9053\u5c71","\u9152\u56ca\u996d\u888b"],"bing":["\u51b0\u6563\u74e6\u89e3","\u70b3\u5982\u89c2\u706b","\u51b0\u58f6\u79cb\u6708","\u51b0\u89e3\u4e91\u6563","\u51b0\u6d01\u6e0a\u6e05","\u51b0\u6d01\u7389\u6e05","\u5175\u9a6c\u4e0d\u52a8","\u51b0\u5c71\u6613\u5012","\u79c9\u94a7\u5f53\u8f74","\u51b0\u6d88\u51bb\u89e3","\u5175\u8d35\u795e\u901f"],"dian":["\u70b9\u624b\u5212\u811a","\u6382\u65a4\u64ad\u4e24","\u7535\u6d41\u661f\u6563","\u70b9\u91d1\u4e4f\u672f","\u70b9\u5934\u54c8\u8170","\u98a0\u6765\u5012\u53bb","\u98a0\u6251\u4e0d\u7834","\u5178\u8c1f\u8bad\u8bf0"],"du":["\u675c\u6e10\u9664\u5fae","\u675c\u95e8\u6666\u8ff9","\u72ec\u6b64\u4e00\u5bb6","\u5992\u8d24\u5ac9\u80fd","\u72ec\u5177\u5320\u5fc3","\u72ec\u6b65\u5929\u4e0b","\u8839\u56fd\u6b8b\u6c11","\u72ec\u5230\u4e4b\u5904","\u5ea6\u65e5\u5982\u5c81","\u8bfb\u4e66\u767e\u904d"],"fang":["\u653e\u706b\u70e7\u5c71","\u653e\u996d\u6d41\u6b60","\u653e\u8a00\u9063\u8f9e","\u65b9\u5bf8\u4e4b\u5730","\u653e\u8361\u4e0d\u7f81","\u653e\u5fc3\u89e3\u4f53","\u653e\u8bde\u4e0d\u7f81"],"bian":["\u8fa8\u5982\u60ac\u6cb3","\u8fa9\u624d\u65e0\u9602","\u53d8\u6545\u6613\u5e38","\u53d8\u5316\u4e0d\u6d4b","\u53d8\u5e7b\u4e0d\u6d4b","\u53d8\u8d2a\u5389\u8584","\u53d8\u5316\u4e0d\u7a77","\u4fbf\u5b9c\u884c\u4e8b","\u4fbf\u5b9c\u65bd\u884c"],"qiao":["\u6a35\u82cf\u5931\u7228","\u6572\u9523\u653e\u7832","\u6572\u9523\u6253\u9f13","\u6194\u795e\u60b4\u529b","\u4fcf\u6210\u4fcf\u8d25","\u5de7\u540c\u9020\u5316","\u4e54\u5986\u6539\u626e","\u7fd8\u8db3\u5f15\u9886","\u6572\u818f\u5438\u9ad3","\u6572\u9aa8\u5265\u9ad3","\u7fd8\u9996\u5f15\u9886"],"lian":["\u604b\u604b\u4e0d\u820d","\u655b\u5bb9\u5c4f\u6c14","\u8fde\u679d\u5206\u53f6","\u8fde\u9501\u53cd\u5e94","\u8fde\u679d\u5171\u51a2","\u5ec9\u6d01\u5949\u516c","\u8fde\u73e0\u5408\u74a7","\u655b\u9aa8\u5439\u9b42","\u655b\u8272\u5c4f\u6c14"],"xing":["\u661f\u6d41\u9706\u51fb","\u884c\u82e5\u72d7\u5f58","\u5f62\u69c1\u5fc3\u7070","\u5174\u5473\u7d22\u7136","\u5174\u5996\u4f5c\u602a","\u5f62\u5bb9\u6194\u60b4","\u661f\u79bb\u96e8\u6563","\u5174\u6587\u533d\u6b66","\u5211\u4e8e\u4e4b\u5316","\u6027\u6025\u53e3\u5feb","\u884c\u4e0d\u903e\u65b9","\u5174\u8da3\u76ce\u7136","\u5f62\u9500\u9aa8\u7acb","\u5174\u5e08\u95ee\u7f6a","\u5f62\u5177\u795e\u751f","\u661f\u6708\u4ea4\u8f89","\u661f\u79fb\u7269\u6362","\u5e78\u707e\u4e50\u7978","\u5f62\u5355\u5f71\u53cc"],"liao":["\u6599\u654c\u5236\u80dc","\u71ce\u82e5\u89c2\u706b","\u5be5\u82e5\u6668\u661f"],"ju":["\u4e3e\u9f0e\u62d4\u5c71","\u97ab\u4e3a\u8302\u8349","\u4ff1\u6536\u5e76\u84c4","\u4e3e\u8d24\u4efb\u80fd","\u4e3e\u8d24\u4f7f\u80fd","\u4e3e\u624b\u6295\u8db3","\u805a\u5c11\u6210\u591a","\u9f83\u9f89\u4e0d\u5408","\u9b3b\u9e21\u4e3a\u51e4","\u636e\u4e49\u5c65\u65b9","\u5c66\u8d31\u8e0a\u8d35","\u4e3e\u5341\u77e5\u4e5d","\u5c40\u5916\u4e4b\u4eba"],"xia":["\u4e0b\u5b66\u4e0a\u8fbe","\u4e0b\u7b14\u6210\u6587","\u7455\u4e0d\u63a9\u745c","\u4e0b\u8f66\u6ce3\u7f6a","\u971e\u601d\u4e91\u60f3","\u9050\u8fe9\u4e00\u4f53","\u4e0b\u6c14\u6021\u8272","\u590f\u866b\u7591\u51b0","\u72ce\u96c9\u9a6f\u7ae5"],"miao":["\u5999\u7edd\u65f6\u4eba","\u5999\u4e0d\u53ef\u8a00"],"mo":["\u9ed8\u5316\u6f5c\u79fb","\u58a8\u5b88\u6210\u6cd5","\u9ed8\u5951\u795e\u4f1a","\u78e8\u783a\u4ee5\u987b","\u78e8\u5200\u970d\u970d","\u6478\u91d1\u6821\u5c09","\u6469\u80a9\u51fb\u6bc2"],"qiu":["\u6c42\u7530\u95ee\u820d","\u79cb\u6708\u5bd2\u6c5f","\u79cb\u6708\u6625\u98ce","\u88d8\u9a6c\u8f7b\u72c2"],"nan":["\u96be\u4ee5\u4e3a\u60c5","\u5357\u9762\u767e\u57ce","\u5357\u8239\u5317\u8f66","\u5357\u53bb\u5317\u6765","\u96be\u89e3\u96be\u5206"],"le":["\u4e50\u5929\u77e5\u547d","\u4e86\u4e0d\u957f\u8fdb","\u4e86\u4e0d\u53ef\u89c1","\u4e86\u4e86\u53ef\u89c1","\u4e86\u5982\u6307\u638c","\u4e86\u65e0\u60e7\u8272","\u4e86\u7136\u4e8e\u80f8","\u4e86\u7136\u65e0\u95fb","\u4e86\u82e5\u6307\u638c","\u4e86\u8eab\u8131\u547d","\u4e86\u8eab\u8fbe\u547d","\u4e50\u5584\u4e0d\u5026","\u4e50\u5584\u597d\u4e49","\u4e50\u5c3d\u60b2\u6765","\u4e50\u5f80\u54c0\u6765","\u4e50\u6781\u54c0\u6765","\u4e50\u6781\u60b2\u6765"],"kai":["\u5f00\u5408\u81ea\u5982","\u5f00\u5c71\u59cb\u7956","\u5f00\u6000\u7545\u996e"],"tu":["\u571f\u6728\u5f62\u9ab8","\u56fe\u8d22\u5bb3\u547d","\u571f\u6276\u6210\u5899","\u9014\u9065\u65e5\u66ae","\u5410\u521a\u8339\u67d4","\u571f\u5d29\u74e6\u89e3","\u5c60\u6bd2\u7b14\u58a8"],"xi":["\u897f\u98df\u4e1c\u7720","\u6790\u73ea\u5224\u91ce","\u6790\u5f8b\u821e\u6587","\u620f\u8776\u6e38\u8702","\u60dc\u5b57\u5982\u91d1","\u5e0c\u5947\u53e4\u602a","\u5e0c\u65e8\u627f\u989c","\u6089\u7d22\u655d\u8d4b","\u5e2d\u4e30\u5c65\u539a","\u819d\u884c\u84b2\u4f0f","\u4e60\u4fd7\u79fb\u6027","\u5438\u98ce\u996e\u9732","\u4e60\u975e\u6210\u662f","\u559c\u6012\u54c0\u4e50","\u5915\u9633\u897f\u4e0b","\u6790\u9ab8\u4ee5\u7228","\u897f\u65b9\u51c0\u56fd"],"kan":["\u574e\u6b62\u6d41\u884c"],"tui":["\u892a\u540e\u8d8b\u524d","\u63a8\u4ea1\u56fa\u5b58","\u63a8\u5df1\u53ca\u4eba","\u63a8\u4e09\u963b\u56db","\u63a8\u5929\u62a2\u5730","\u63a8\u8f6e\u6367\u6bc2","\u63a8\u5e72\u5c31\u6e7f"],"he":["\u6cb3\u6e05\u6d77\u7aed","\u6cb3\u6c49\u65e0\u6781","\u6cb3\u4e0d\u51fa\u56fe","\u6cb3\u76ee\u6d77\u53e3","\u9e64\u9aa8\u9e21\u80a4","\u4f55\u6240\u4e0d\u81f3","\u4f55\u53bb\u4f55\u4ece","\u6db8\u601d\u5e72\u8651","\u6cb3\u6e05\u4eba\u5bff","\u8d6b\u7136\u800c\u6012","\u6cb3\u5c71\u5e26\u783a"],"zhuang":["\u5986\u6a21\u4f5c\u6837","\u58ee\u58eb\u89e3\u8155"],"si":["\u4f3c\u6709\u5982\u65e0","\u6b7b\u751f\u5b58\u4ea1","\u56db\u4e0d\u62d7\u516d","\u6b7b\u751f\u8363\u8fb1","\u56db\u4e66\u4e94\u7ecf","\u53f8\u7a7a\u89c1\u60ef","\u56db\u901a\u516b\u8fbe","\u56db\u6d77\u9f0e\u6cb8","\u6b7b\u6709\u4f59\u8f9c","\u6b7b\u6c42\u767e\u8d56","\u4f3c\u6c34\u5982\u9c7c","\u56db\u80a2\u767e\u4f53"],"cheng":["\u60e9\u4e00\u6212\u767e","\u57ce\u5317\u5f90\u516c","\u6210\u5343\u4e0a\u4e07","\u6210\u5343\u6210\u4e07","\u6210\u5343\u7d2f\u4e07","\u6210\u5343\u8bba\u4e07","\u4e58\u9f99\u914d\u51e4","\u4e58\u95f4\u62b5\u9699","\u79e4\u4e0d\u79bb\u7823","\u4e58\u98ce\u7834\u6d6a","\u90e2\u4eba\u65a4\u65ab","\u79f0\u8d24\u8350\u80fd","\u6210\u53cc\u4f5c\u5bf9","\u6210\u65e5\u6210\u591c","\u4e58\u5174\u800c\u6765","\u4e58\u865a\u800c\u5165","\u4e58\u9699\u800c\u5165","\u9a8b\u55dc\u5954\u6b32","\u4e58\u80dc\u9010\u5317","\u6210\u8d25\u8bba\u4eba","\u627f\u524d\u542f\u540e","\u6210\u4eba\u4e4b\u7f8e"],"bi":["\u907f\u7978\u6c42\u798f","\u9f3b\u7aef\u51fa\u706b","\u835c\u95e8\u572d\u7aa6","\u7b14\u5927\u5982\u693d","\u95ed\u95e8\u8bfb\u4e66","\u6bd4\u80a9\u53e0\u8ff9","\u853d\u660e\u585e\u806a","\u95ed\u660e\u585e\u806a","\u95ed\u76ee\u585e\u806a","\u5fc5\u8eac\u5fc5\u4eb2","\u5f0a\u7edd\u98ce\u6e05","\u6bd4\u7269\u5c5e\u4e8b","\u907f\u91cd\u5c31\u8f7b","\u655d\u5e37\u4e0d\u5f03","\u9f3b\u7aef\u751f\u706b","\u907f\u5f3a\u51fb\u5f31","\u907f\u91cd\u9010\u8f7b","\u907f\u70e6\u6597\u6377","\u7b14\u8015\u781a\u7530","\u6bd4\u7ffc\u53cc\u98de","\u78a7\u843d\u9ec4\u6cc9"],"zu":["\u8db3\u4e0d\u51fa\u95e8","\u4fce\u6a3d\u6298\u51b2"],"fei":["\u6cb8\u6cb8\u6c64\u6c64","\u98de\u626c\u6d6e\u8e81","\u60b1\u607b\u7f20\u7ef5","\u98de\u9e70\u8d70\u72ac","\u98de\u89de\u8d70\u659d","\u80a5\u7518\u8f7b\u6696","\u532a\u4f0a\u671d\u5915","\u532a\u5937\u6240\u601d","\u98de\u84ec\u4e58\u98ce","\u80a5\u80a0\u6ee1\u8111","\u98de\u9ec4\u817e\u8e0f","\u98de\u86fe\u8d74\u70db"],"zhu":["\u73e0\u8fd8\u5408\u6d66","\u6731\u5e72\u7389\u621a","\u9010\u53e5\u9010\u5b57","\u9010\u98ce\u8ffd\u7535","\u73e0\u89c4\u7389\u77e9","\u73e0\u6c89\u7389\u9668","\u6731\u95e8\u7ee3\u6237","\u6731\u8f53\u7681\u76d6","\u67f1\u5929\u8e0f\u5730","\u9010\u673a\u5e94\u53d8","\u7b51\u5ba4\u53cd\u8015","\u70db\u7167\u6570\u8ba1","\u94e2\u65bd\u4e24\u8f83","\u73e0\u96f6\u7389\u843d","\u682a\u8fde\u8513\u5f15"],"ban":["\u534a\u6d82\u800c\u7f62","\u534a\u7b79\u83ab\u5c55","\u534a\u6b7b\u534a\u751f","\u73ed\u8346\u9053\u6545","\u534a\u5410\u534a\u9732","\u534a\u65a4\u516b\u4e24","\u534a\u7591\u534a\u4fe1","\u534a\u65a4\u516b\u9762"],"shuang":["\u53cc\u6816\u53cc\u5bbf","\u723d\u5fc3\u8c41\u76ee"],"yue":["\u60a6\u8fd1\u6765\u8fdc","\u5cb3\u9547\u6e0a\u6e1f","\u60a6\u76ee\u5a31\u5fc3","\u6708\u660e\u5343\u91cc"],"leng":["\u695e\u5934\u78d5\u8111","\u51b7\u5632\u70ed\u8bbd","\u51b7\u5fc3\u51b7\u9762"],"ran":["\u71c3\u8401\u716e\u8c46","\u67d3\u65e7\u4f5c\u65b0","\u67d3\u6307\u5782\u6d8e","\u67d3\u987b\u79cd\u9f7f"],"zao":["\u51ff\u6979\u7eb3\u4e66","\u65e9\u5360\u52ff\u836f","\u906d\u9645\u65f6\u4f1a","\u6fa1\u8eab\u6d74\u5fb7","\u906d\u65f6\u5b9a\u5236","\u51ff\u996e\u8015\u98df","\u51ff\u9aa8\u6363\u9ad3","\u9020\u6b21\u884c\u4e8b","\u51ff\u51ff\u53ef\u636e","\u51ff\u576f\u800c\u9041"],"heng":["\u6a2a\u8eba\u7ad6\u5367","\u6a2a\u62a2\u786c\u593a","\u6a2a\u884c\u9006\u65bd","\u6a2a\u7709\u51b7\u76ee","\u6a2a\u5cf0\u4fa7\u5cad"],"xiu":["\u4f11\u58f0\u7f8e\u8a89","\u79c0\u8272\u53ef\u9910","\u673d\u6728\u96be\u5f6b","\u673d\u6208\u949d\u7532","\u5bbf\u5f0a\u4e00\u6e05","\u4fee\u5fc3\u517b\u6027"],"xiong":["\u718a\u7ecf\u9e1f\u5f15","\u80f8\u65e0\u70b9\u58a8","\u6c79\u6d8c\u6ddc\u6e43","\u51f6\u76f8\u6bd5\u9732","\u5144\u5f1f\u960b\u5899","\u6c79\u6d8c\u5f6d\u6e43","\u80f8\u6709\u6210\u7565","\u80f8\u6709\u4e18\u58d1"],"can":["\u9910\u8469\u996e\u9732","\u6b8b\u6e23\u4f59\u5b7d","\u6b8b\u5c71\u5269\u6c34","\u7cb2\u7136\u53ef\u89c2","\u53c2\u4f0d\u9519\u7eb5","\u8695\u98df\u9cb8\u541e"],"pei":["\u914d\u5957\u6210\u9f99"],"wen":["\u6587\u7ae0\u7ecf\u6d4e","\u95fb\u4e00\u77e5\u4e8c","\u6587\u541b\u65b0\u5be1","\u6587\u97ec\u6b66\u7565","\u6e29\u51ca\u5b9a\u7701","\u95fb\u540d\u4e27\u80c6","\u6587\u7ae0\u5b97\u5de5","\u95fb\u98ce\u800c\u9003"],"duo":["\u591a\u5634\u732e\u6d45","\u591a\u6101\u5584\u611f","\u591a\u60c5\u5584\u611f","\u591a\u8bb8\u5c11\u4e0e","\u591a\u9c7c\u4e4b\u6f0f"],"cang":["\u6ca7\u6d77\u4e00\u9cde","\u82cd\u72d7\u767d\u8863","\u82cd\u989c\u767d\u53d1","\u82cd\u9ec4\u7ffb\u590d","\u4ed3\u5352\u4e4b\u9645","\u6ca7\u6d77\u6851\u7530"],"yong":["\u52c7\u731b\u7cbe\u8fdb","\u548f\u6708\u5632\u82b1","\u9954\u98e7\u4e0d\u6d4e","\u9954\u98e7\u4e0d\u7ed9"],"ping":["\u5e73\u6d41\u7f13\u8fdb","\u51ed\u57ce\u501f\u4e00","\u5c4f\u6c14\u6151\u606f","\u5e73\u5fc3\u800c\u8bba","\u5e73\u5fc3\u5b9a\u6c14","\u5c4f\u6c14\u51dd\u795e"],"xun":["\u5faa\u5e8f\u6e10\u8fdb","\u8be2\u8c0b\u4f65\u540c","\u5faa\u9014\u5b88\u8f99"],"xiang":["\u50cf\u5fc3\u5982\u610f","\u76f8\u4e60\u6210\u98ce","\u60f3\u671b\u98ce\u91c7","\u9999\u706b\u56e0\u7f18","\u54cd\u548c\u666f\u4ece","\u76f8\u6cbf\u6210\u4fd7","\u8c61\u7b80\u4e4c\u7eb1","\u9999\u836f\u8106\u6885","\u9999\u706b\u4e0d\u7edd","\u76f8\u89c6\u800c\u7b11","\u76f8\u53cd\u76f8\u6210","\u76f8\u5f62\u89c1\u62d9","\u8be6\u661f\u62dc\u6597"],"xian":["\u95f2\u8a00\u6cfc\u8bed","\u5f26\u5916\u4e4b\u54cd","\u8854\u6c99\u586b\u6d77","\u95f2\u8a00\u51b7\u8bed","\u54b8\u4e0e\u60df\u65b0","\u5148\u610f\u627f\u65e8","\u5148\u6cb3\u540e\u6d77","\u5148\u6089\u5fc5\u5177","\u8d24\u826f\u65b9\u6b63","\u9c9c\u8f66\u5065\u9a6c","\u6d8e\u8138\u6d8e\u76ae","\u5148\u7779\u4e3a\u5feb","\u8854\u73af\u7ed3\u8349","\u9669\u963b\u8270\u96be","\u4ed9\u5c71\u697c\u9601","\u9677\u8eab\u56f9\u5704","\u4ed9\u5c71\u743c\u9601","\u5148\u65a9\u540e\u594f"],"qin":["\u6c81\u4eba\u5fc3\u813e","\u4eb2\u5bc6\u65e0\u95f4","\u4eb2\u75db\u4ec7\u5feb","\u4eb2\u5982\u624b\u8db3","\u94a6\u5dee\u5927\u81e3","\u4eb2\u4e0a\u6210\u4eb2","\u79e6\u955c\u9ad8\u60ac"],"yao":["\u7476\u53f0\u743c\u5ba4","\u8981\u8a00\u5999\u9053","\u5996\u9b54\u9b3c\u602a","\u54ac\u97f3\u5482\u5b57","\u8000\u6b66\u626c\u5a01","\u7476\u6797\u743c\u6811","\u8981\u4ef7\u8fd8\u4ef7","\u54ac\u9489\u56bc\u94c1","\u6447\u5c3e\u6c42\u98df","\u54ac\u8840\u4e3a\u76df"],"hang":["\u6c86\u7023\u4e00\u6c14"],"zhen":["\u771f\u51ed\u5b9e\u636e","\u73cd\u79bd\u5947\u517d","\u771f\u60c5\u5b9e\u610f","\u771f\u77e5\u707c\u89c1","\u6795\u5ca9\u6f31\u6d41","\u771f\u91d1\u4e0d\u9540","\u6795\u6d41\u6f31\u77f3","\u8d1e\u4e0b\u8d77\u5143","\u7504\u5fc3\u52a8\u60e7"],"man":["\u8513\u8513\u65e5\u8302","\u6ee1\u8c37\u6ee1\u5751","\u86ee\u6765\u751f\u4f5c","\u6f2b\u85cf\u8bf2\u76d7","\u6ee1\u57ce\u98ce\u96e8","\u86ee\u70df\u7634\u96e8","\u6f2b\u5929\u5f00\u4ef7"],"hao":["\u597d\u9ad8\u9a9b\u8fdc","\u568e\u5929\u52a8\u5730","\u6d69\u6d69\u6c64\u6c64","\u597d\u5929\u826f\u591c","\u597d\u9152\u8d2a\u676f","\u7693\u9f7f\u660e\u7738"],"han":["\u542b\u82f1\u5480\u534e","\u6c57\u6d41\u63a5\u8e35","\u6c57\u6d41\u6d43\u4f53","\u5bd2\u9178\u843d\u9b44","\u97e9\u4fe1\u5c06\u5175","\u6c57\u6d41\u6d3d\u80cc","\u542b\u82de\u5f85\u653e","\u542b\u82de\u6b32\u653e","\u6c57\u8840\u76d0\u8f66"],"ding":["\u9f0e\u956c\u5982\u9974","\u9f0e\u6298\u9917\u8986","\u9f0e\u6e56\u9f99\u53bb","\u5b9a\u56fd\u5b89\u90a6"],"luan":["\u4e71\u4e16\u82f1\u96c4","\u9e3e\u9e44\u5728\u5ead","\u9e3e\u505c\u9e44\u5cd9","\u9e3e\u4fe6\u51e4\u4fa3"],"hun":["\u9b42\u4e0d\u8d1f\u4f53","\u9b42\u4e0d\u5b88\u5b85","\u6df7\u4e3a\u4e00\u8c08","\u660f\u5934\u660f\u8111","\u9b42\u4e0d\u8d74\u4f53","\u9b42\u6d88\u9b44\u4e27","\u9b42\u60ca\u9b44\u60d5","\u6d51\u62a1\u541e\u67a3","\u6df7\u6dc6\u662f\u975e"],"dai":["\u5f85\u5b57\u95fa\u4e2d","\u6b86\u65e0\u5b51\u9057","\u5f85\u7406\u4e0d\u7406","\u9a80\u80cc\u9e64\u53d1"],"mi":["\u5f25\u5929\u5927\u7978","\u5e7a\u4e48\u5c0f\u4e11","\u8ff7\u79bb\u604d\u60da","\u871c\u91cc\u8c03\u6cb9","\u9761\u9761\u4e4b\u4e50","\u5f25\u65e5\u7d2f\u591c","\u9761\u9761\u4e4b\u97f3","\u8ff7\u79bb\u5f9c\u4eff","\u9761\u77e5\u6240\u63aa"],"chi":["\u5403\u7740\u4e0d\u5c3d","\u6301\u6a50\u7c2a\u7b14","\u9e31\u89c6\u72fc\u987e","\u9a70\u9b42\u593a\u9b44","\u5c3a\u4e8c\u51a4\u5bb6","\u5f1b\u9b42\u5b95\u9b44","\u6301\u76c8\u4fdd\u6cf0","\u803b\u5c45\u738b\u540e","\u5c3a\u6ce2\u7535\u8c22"],"ying":["\u8425\u8425\u82df\u82df","\u9e70\u5fc3\u96c1\u722a","\u5e94\u8282\u5408\u62cd","\u82f1\u96c4\u672c\u8272","\u8fce\u5203\u4ee5\u89e3","\u82f1\u58f0\u8302\u5b9e"],"yin":["\u541f\u98ce\u5f04\u6708","\u56e0\u5faa\u82df\u4e14","\u5f15\u4f38\u89e6\u7c7b","\u5f15\u7c7b\u547c\u670b","\u5f15\u624b\u6295\u8db3","\u9634\u5c71\u80cc\u540e","\u5f15\u6c34\u5165\u5899","\u56e0\u5faa\u5750\u8bef","\u56e0\u96be\u89c1\u5de7","\u97f3\u4fe1\u6773\u65e0","\u56e0\u98ce\u5439\u706b","\u5f15\u7389\u4e4b\u7816","\u5f15\u7269\u8fde\u7c7b","\u56e0\u964b\u5c31\u5be1","\u996e\u9a6c\u6295\u94b1","\u6deb\u8bcd\u4eb5\u8bed","\u5f15\u7533\u89e6\u7c7b"],"bao":["\u4fdd\u76c8\u6301\u6cf0","\u62b1\u5b50\u5f04\u5b59","\u62b1\u6253\u4e0d\u5e73","\u66b4\u8650\u65e0\u9053","\u5265\u80a4\u53ca\u9ad3","\u5265\u80a4\u690e\u9ad3","\u5b9d\u73e0\u5e02\u997c","\u4fdd\u5bb6\u536b\u56fd","\u62b1\u6734\u542b\u771f","\u5305\u63fd\u8bcd\u8bbc"],"liu":["\u6d41\u82b3\u5343\u53e4","\u6d41\u79bb\u64ad\u8d8a","\u516d\u6839\u6e05\u51c0","\u6d41\u79bb\u98a0\u6c9b","\u5218\u90ce\u524d\u5ea6","\u6d41\u6c57\u6d43\u80cc","\u516d\u51fa\u5947\u8ba1","\u67f3\u8857\u82b1\u5df7"],"tan":["\u8d2a\u810f\u6789\u6cd5","\u8c08\u53e4\u8bba\u4eca","\u8d2a\u592b\u5f87\u8d22","\u8d2a\u800c\u65e0\u4fe1"],"san":["\u4e09\u5dee\u4e94\u9519","\u4e09\u5934\u4e24\u7eea","\u4e09\u5206\u9f0e\u8db3","\u4e09\u957f\u4e24\u77ed","\u4e09\u5dee\u4e24\u9519","\u4e09\u7f04\u5176\u53e3","\u4e09\u7ffb\u56db\u590d","\u4e09\u8d1e\u4e5d\u70c8","\u4e09\u707e\u516b\u96be","\u4e09\u5934\u4e24\u65e5","\u4e09\u671d\u4e94\u65e5","\u4e09\u53e0\u9633\u5173","\u4e09\u9633\u5f00\u6cf0","\u4e09\u66f4\u534a\u591c","\u4e09\u957f\u56db\u77ed","\u4e09\u6218\u4e09\u5317","\u4e09\u671d\u5143\u8001","\u4e09\u5934\u4e24\u9762","\u4e09\u5934\u516d\u9762","\u4e09\u5bf9\u516d\u9762","\u4e09\u4f4d\u4e00\u4f53","\u4e09\u597d\u4e24\u6b49","\u4e09\u8364\u4e94\u538c","\u4e09\u5934\u516d\u81c2","\u4e09\u5bf8\u4e4b\u820c","\u4e09\u5934\u516d\u8bc1"],"wei":["\u4e3a\u6c11\u9664\u5bb3","\u4e3a\u9b3c\u4e3a\u872e","\u672a\u5b9a\u4e4b\u5929","\u8fdd\u5929\u5bb3\u7406","\u4e3a\u86c7\u6dfb\u8db3","\u4e3a\u86c7\u753b\u8db3","\u552f\u547d\u662f\u4ece","\u4e3a\u6240\u6b32\u4e3a","\u4e3a\u4e1b\u9a71\u96c0","\u672a\u827e\u65b9\u5174","\u5371\u8a00\u5371\u884c","\u4f4d\u5351\u8a00\u9ad8","\u5371\u5982\u671d\u9732","\u5371\u82e5\u671d\u9732","\u59d4\u8fc7\u4e8e\u4eba","\u5473\u540c\u56bc\u8721","\u5371\u8a00\u6b63\u8272","\u4e3a\u975e\u4f5c\u6076","\u672a\u8bc6\u4e00\u4e01","\u504e\u6175\u5815\u61d2","\u97e6\u7f16\u4e09\u7edd","\u8fdd\u5929\u6096\u4eba","\u5fae\u4e0d\u8db3\u9053","\u60df\u5999\u60df\u8096"],"deng":["\u767b\u754c\u6e38\u65b9","\u706f\u706b\u4e07\u5bb6"],"tian":["\u5929\u4e0d\u5047\u5e74","\u7530\u592b\u91ce\u8001","\u5929\u884c\u65f6\u6c14","\u5929\u6717\u6c14\u6e05","\u5929\u672b\u51c9\u98ce","\u5929\u584c\u5730\u9677","\u5929\u751f\u5929\u6740","\u5929\u8863\u65e0\u7f1d","\u5929\u7f18\u51d1\u5408","\u5929\u5730\u5256\u5224","\u5929\u707e\u4eba\u7978","\u5929\u547d\u6538\u5f52","\u751c\u8a00\u5a9a\u8bed"],"fan":["\u8fd4\u672c\u8fd8\u5143","\u8d29\u592b\u9a7a\u5352","\u53cd\u542c\u6536\u89c6","\u51e1\u6843\u4fd7\u674e","\u8fd4\u672c\u8fd8\u539f","\u8fd4\u6734\u8fd8\u6df3","\u51e1\u80ce\u6d4a\u4f53","\u7e41\u5f81\u535a\u5f15"],"hua":["\u82b1\u597d\u6708\u5706","\u6ed1\u6ce5\u626c\u6ce2","\u5316\u9e31\u4e3a\u51e4","\u753b\u997c\u5145\u9965","\u753b\u7586\u58a8\u5b88","\u534e\u800c\u4e0d\u5b9e","\u82b1\u82b1\u7eff\u7eff","\u753b\u8102\u9542\u51b0"],"dong":["\u6d1e\u9274\u53e4\u4eca","\u4e1c\u9003\u897f\u7a9c","\u4e1c\u62b9\u897f\u6d82","\u4e1c\u6326\u897f\u64a6","\u4e1c\u8c08\u897f\u8bf4","\u4e1c\u9053\u4e4b\u8c0a","\u4e1c\u5357\u4e4b\u79c0","\u4e1c\u632a\u897f\u51d1","\u8463\u72d0\u76f4\u7b14","\u51ac\u6e29\u590f\u6e05","\u606b\u7591\u865a\u7332","\u680b\u6298\u69b1\u5d29","\u680b\u673d\u69b1\u5d29","\u52a8\u4eba\u5fc3\u5f26","\u4e1c\u96f6\u897f\u843d","\u4e1c\u91ce\u8d25\u9a7e","\u4e1c\u6eda\u897f\u722c","\u4e1c\u897f\u6613\u9762","\u4e1c\u98ce\u4eba\u9762","\u51ac\u5bd2\u62b1\u51b0","\u4e1c\u96f6\u897f\u788e","\u4e1c\u5154\u897f\u4e4c","\u4e1c\u5f20\u897f\u671b","\u4e1c\u51b2\u897f\u649e"],"chong":["\u5145\u7bb1\u76c8\u67b6","\u866b\u81c2\u9f20\u809d","\u8202\u5bb9\u5927\u96c5","\u5d07\u672c\u6291\u672b"],"gu":["\u9f13\u820c\u6447\u5507","\u53e4\u8272\u53e4\u9999","\u86ca\u60d1\u4eba\u5fc3","\u5b64\u8eab\u53ea\u5f71","\u9f13\u65d7\u76f8\u5f53","\u9f13\u8111\u4e89\u5934","\u9f13\u543b\u5f04\u820c","\u5b64\u82e6\u4ec3\u4fdc","\u53e4\u8c03\u4e0d\u5f39","\u56fa\u82e5\u91d1\u6c64","\u987e\u5168\u5927\u5c40","\u987e\u76fc\u81ea\u96c4","\u5b64\u5b66\u5760\u7eea","\u5b64\u7acb\u65e0\u52a9","\u6cbd\u8a89\u9493\u540d","\u9f13\u820c\u6380\u7c27","\u5b64\u519b\u6df1\u5165","\u9f13\u8179\u542b\u548c","\u5b64\u60ac\u5ba2\u5bc4","\u5471\u5471\u5760\u5730"],"e":["\u627c\u895f\u63a7\u54bd","\u997f\u864e\u4e4b\u8e4a","\u5ce8\u5ce8\u6c64\u6c64","\u989d\u624b\u76f8\u5e86","\u6076\u6027\u5faa\u73af","\u5ce8\u51a0\u535a\u5e26"],"chang":["\u5021\u6761\u51b6\u53f6","\u5e38\u5907\u4e0d\u61c8","\u957f\u6750\u5c0f\u8bd5","\u957f\u547d\u767e\u5c81","\u957f\u4e50\u672a\u592e","\u957f\u8ba1\u8fdc\u8651","\u957f\u7bc7\u5927\u8bba","\u957f\u6076\u9761\u609b","\u957f\u6b4c\u5f53\u54ed","\u957f\u9a71\u76f4\u5165","\u957f\u624d\u5e7f\u5ea6","\u957f\u4ead\u77ed\u4ead","\u957f\u5618\u77ed\u53f9","\u957f\u9e23\u90fd\u5c09","\u957f\u5f80\u8fdc\u5f15"],"huai":["\u6000\u51a4\u62b1\u5c48","\u6000\u771f\u62b1\u7d20"],"guo":["\u8fc7\u6cb3\u62c6\u6865","\u56fd\u8272\u5929\u9999","\u8fc7\u800c\u80fd\u6539","\u8fc7\u65f6\u9ec4\u82b1","\u8fc7\u76ee\u6210\u8bf5"],"zan":["\u6512\u7709\u82e6\u8138"],"wan":["\u4e07\u4e0d\u5931\u4e00","\u4e07\u53e3\u4e00\u8c08","\u4e07\u4e07\u5343\u5343","\u4e07\u4e0d\u5f97\u5df2","\u4e07\u4e16\u4e00\u65f6","\u4e07\u4e16\u4e0d\u6613","\u4e07\u4e16\u5e08\u8868","\u4e07\u4e16\u65e0\u7586","\u4e07\u4e16\u6d41\u82b3","\u4e07\u4e8b\u4ea8\u901a","\u4e07\u4e8b\u5927\u5409","\u73a9\u5175\u9ee9\u6b66","\u4e07\u5bb6\u706f\u706b","\u4e07\u6237\u5343\u95e8","\u525c\u8089\u533b\u75ae","\u4e07\u6c34\u5343\u5c71"],"quan":["\u529d\u767e\u8bbd\u4e00","\u6743\u5b9c\u4e4b\u7b56","\u5708\u7262\u517b\u7269","\u5168\u667a\u5168\u80fd","\u5168\u77e5\u5168\u80fd","\u72ac\u9a6c\u4e4b\u8bda","\u6743\u91cd\u79e9\u5351","\u529d\u5584\u6212\u6076","\u6743\u8861\u8f7b\u91cd","\u72ac\u5420\u4e4b\u8b66"],"ye":["\u591c\u957f\u68a6\u77ed","\u7237\u7fb9\u5a18\u996d","\u53f6\u516c\u597d\u9f99","\u91ce\u4eba\u594f\u66dd","\u53f6\u7626\u82b1\u6b8b","\u591c\u4ee5\u7ee7\u663c","\u591c\u96e8\u5bf9\u5e8a"],"ku":["\u82e6\u4e0d\u582a\u8a00","\u67af\u9aa8\u751f\u8089","\u67af\u4f53\u7070\u5fc3","\u82e6\u8eab\u7126\u601d","\u67af\u679d\u8d25\u53f6"],"ma":["\u9a6c\u7ffb\u4eba\u4ef0","\u9a6c\u6d61\u725b\u6eb2","\u9a6c\u89d2\u4e4c\u767d","\u9a6c\u4e0a\u5899\u5934","\u9a6c\u6349\u8001\u9f20"],"lu":["\u5c65\u7a7f\u8e35\u51b3","\u9732\u5f80\u971c\u6765","\u9e7f\u76ae\u82cd\u74a7","\u9732\u6c34\u592b\u59bb","\u5c65\u8204\u4ea4\u9519","\u8def\u7edd\u4eba\u7a00","\u9732\u9910\u98ce\u5bbf","\u7eff\u6797\u8c6a\u5ba2","\u5c65\u8584\u4e34\u6df1","\u5c65\u971c\u77e5\u51b0","\u7eff\u9b13\u6731\u989c","\u7387\u571f\u4e4b\u6ee8"],"diao":["\u540a\u513f\u90ce\u5f53","\u5201\u94bb\u53e4\u602a","\u96d5\u7ae0\u7ed8\u53e5","\u8c03\u4e09\u7a9d\u56db","\u540a\u6c11\u4f10\u7f6a"],"xuan":["\u8852\u7389\u81ea\u552e","\u60ac\u9f13\u5f85\u690e","\u60ac\u5d16\u5ced\u58c1","\u70ab\u5947\u4e89\u80dc","\u60ac\u8f66\u4e4b\u5e74","\u60ac\u5d16\u7edd\u58c1","\u65cb\u751f\u65cb\u706d","\u8f69\u8f69\u751a\u5f97","\u60ac\u6881\u523a\u9aa8","\u7384\u9152\u74e0\u812f","\u60ac\u6881\u523a\u80a1"],"ou":["\u6ca4\u73e0\u69ff\u8273","\u5076\u4e00\u4e3a\u4e4b","\u9e25\u9e6d\u5fd8\u673a","\u5455\u5fc3\u62bd\u80a0","\u9e25\u6c34\u76f8\u4f9d"],"yu":["\u96e8\u6ce3\u4e91\u6101","\u96e8\u8fc7\u5929\u9752","\u9c7c\u7b3a\u96c1\u4e66","\u4e0e\u65f6\u63a8\u79fb","\u8bed\u77ed\u60c5\u957f","\u9c7c\u6e38\u91dc\u5e95","\u7389\u536e\u65e0\u5f53","\u9c7c\u9f99\u6df7\u6742","\u5401\u5488\u90fd\u4fde","\u4e0e\u65f6\u5055\u884c","\u4f59\u58f0\u4e09\u65e5","\u8bed\u8a00\u65e0\u5473","\u4e0e\u4eba\u65b9\u4fbf","\u4e88\u593a\u751f\u6740","\u903e\u5899\u7aa5\u8819","\u9c7c\u80a0\u5c3a\u7d20","\u9c7c\u5c01\u96c1\u5e16","\u7389\u780c\u96d5\u9611","\u4e0e\u4f17\u4e0d\u540c","\u7389\u77f3\u76f8\u63c9","\u6b32\u53d6\u59d1\u4e88","\u96e8\u8ff9\u4e91\u8e2a","\u9047\u4e8b\u751f\u98ce","\u6b32\u76ca\u53cd\u635f","\u96e8\u8986\u4e91\u7ffb","\u96e8\u6563\u98ce\u6d41"],"ning":["\u51dd\u77a9\u4e0d\u8f6c"],"chou":["\u6101\u7709\u8e59\u989d","\u6101\u4e91\u60e8\u6de1","\u4e11\u58f0\u8fdc\u64ad","\u62bd\u9ec4\u5bf9\u767d","\u62bd\u85aa\u6b62\u6cb8","\u6101\u80a0\u6ba2\u9152","\u4e11\u6001\u6bd5\u9732"],"xu":["\u5f90\u5a18\u534a\u8001","\u987b\u9aef\u5982\u621f","\u865a\u5f80\u5b9e\u5f52","\u7d6e\u679c\u5170\u56e0"],"pang":["\u5e9e\u7709\u9ec4\u53d1","\u65c1\u5f81\u535a\u5f15","\u65c1\u63a8\u4fa7\u5f15"],"cai":["\u8d22\u6b9a\u529b\u75e1","\u88c1\u6708\u9542\u4e91","\u624d\u591a\u8bc6\u5be1","\u6750\u5fb7\u517c\u5907","\u91c7\u53ca\u8451\u83f2","\u5f69\u51e4\u968f\u9e26","\u8d22\u8ff7\u5fc3\u7a8d"],"sou":["\u641c\u5947\u6289\u602a"],"gua":["\u6302\u4e00\u6f0f\u4e07","\u6302\u809a\u7275\u80a0","\u5be1\u4e0d\u80dc\u4f17","\u6302\u51a0\u5f52\u53bb","\u74dc\u7530\u674e\u4e0b","\u74dc\u8fde\u8513\u5f15"],"gao":["\u9ad8\u8f66\u9a77\u9a6c","\u9ad8\u98de\u8fdc\u8d70","\u9ad8\u5934\u5927\u9a6c","\u9ad8\u624d\u5353\u8bc6","\u9ad8\u6b4c\u731b\u8fdb","\u69c1\u82cf\u668d\u9192","\u818f\u5507\u62ed\u820c","\u9ad8\u81ea\u6807\u7f6e","\u9ad8\u658b\u5b66\u58eb","\u7f1f\u7ebb\u4e4b\u4ea4","\u9ad8\u7fd4\u8fdc\u5f15","\u9ad8\u5cb8\u6df1\u8c37"],"huang":["\u9ec4\u51a0\u8349\u670d","\u8352\u8c2c\u7edd\u4f26","\u8352\u65e0\u4eba\u70df","\u9ec4\u5377\u9752\u706f","\u9ec4\u53d1\u513f\u9f7f","\u60f6\u60f6\u4e0d\u5b89","\u9ec4\u82b1\u665a\u8282","\u9ec4\u6c64\u8fa3\u6c34","\u9ec4\u91d1\u94f8\u8c61"],"shui":["\u6c34\u843d\u5f52\u69fd","\u6c34\u6cc4\u4e0d\u901a","\u7761\u5367\u4e0d\u5b81","\u6c34\u4f69\u98ce\u88f3","\u6c34\u7c73\u65e0\u4ea4","\u6c34\u6cc4\u4e0d\u6f0f","\u6c34\u8c03\u6b4c\u5934"],"shen":["\u6df1\u58c1\u56fa\u5792","\u8eab\u540d\u4ff1\u8d25","\u8eab\u540d\u4e24\u6cf0","\u614e\u7ec8\u4e8e\u59cb","\u5ba1\u66f2\u9762\u52bf","\u8eab\u5fc3\u4ea4\u75c5","\u795e\u81f3\u4e4b\u7b14","\u6df1\u96e0\u5927\u6068","\u795e\u62b6\u7535\u51fb","\u8eab\u5f53\u77e2\u77f3","\u795e\u6765\u6c14\u65fa","\u795e\u6d41\u6c14\u9b2f","\u6df1\u60c5\u5e95\u7406","\u614e\u5c0f\u4e8b\u5fae","\u795e\u7ae6\u5fc3\u60d5","\u795e\u67a2\u9b3c\u85cf","\u795e\u673a\u5999\u7b97","\u795e\u8d85\u5f62\u8d8a","\u8eab\u5f3a\u529b\u58ee","\u795e\u8272\u4ed3\u7687","\u795e\u6447\u76ee\u593a","\u6df1\u5389\u6d45\u63ed","\u795e\u60c5\u81ea\u82e5","\u795e\u51fa\u9b3c\u5165"],"mian":["\u9762\u58c1\u78e8\u7816","\u9762\u65e0\u60ed\u8272","\u9762\u7ea2\u9762\u8d64","\u514d\u5f00\u5c0a\u53e3","\u7ef5\u7ef5\u4e0d\u7edd","\u51a5\u601d\u82e6\u60f3","\u7ef5\u91cc\u85cf\u9488","\u9762\u6709\u96be\u8272","\u817c\u989c\u4e8b\u4ec7"],"nian":["\u637b\u571f\u4e3a\u9999","\u5e74\u6e6e\u4e16\u8fdc","\u5e74\u6df1\u6708\u4e45","\u5ff5\u5ff5\u6709\u8bcd"],"nu":["\u5973\u7ec7\u7537\u8015","\u5974\u989c\u5a62\u7750","\u5973\u4e2d\u4e08\u592b","\u5973\u4e2d\u5c27\u821c","\u5973\u4e2d\u8c6a\u6770","\u5973\u5927\u5f53\u5ac1","\u5973\u5927\u96be\u7559","\u5973\u5927\u987b\u5ac1","\u5973\u5a32\u8865\u5929"],"chuo":["\u6233\u5fc3\u704c\u9ad3","\u8f8d\u6beb\u6816\u724d"],"chun":["\u6625\u5bd2\u6599\u5ced","\u83bc\u9c88\u4e4b\u601d","\u5507\u9f7f\u4e4b\u90a6","\u6625\u6696\u82b1\u5f00","\u7eaf\u4e00\u4e0d\u6742","\u6625\u751f\u79cb\u6740","\u6625\u56de\u5927\u5730","\u9187\u9152\u7f8e\u4eba","\u6625\u610f\u76ce\u7136"],"hu":["\u864e\u8361\u7f8a\u7fa4","\u864e\u7a74\u9f99\u6f6d","\u80e1\u601d\u4e71\u91cf","\u80e1\u8bf4\u4e71\u9053","\u864e\u4e0d\u98df\u513f","\u6019\u624d\u9a84\u7269","\u72d0\u88d8\u5c28\u8338","\u72d0\u9f20\u4e4b\u5f92","\u547c\u5e9a\u547c\u7678","\u80e1\u6405\u86ee\u7f20","\u864e\u63b7\u9f99\u62ff","\u62a4\u56fd\u4f51\u6c11","\u864e\u89c6\u803d\u803d","\u864e\u5c3e\u6625\u51b0","\u864e\u5934\u864e\u8111","\u864e\u8e1e\u9cb8\u541e","\u547c\u670b\u5f15\u7c7b"],"chu":["\u9edc\u965f\u5e7d\u660e","\u695a\u695a\u4f5c\u6001","\u51fa\u5165\u4eba\u7f6a","\u695a\u56da\u76f8\u5bf9","\u51fa\u4eba\u671b\u5916","\u51fa\u6709\u5165\u65e0","\u51fa\u5176\u4e0d\u610f","\u51fa\u5947\u53d6\u80dc","\u51fa\u5356\u7075\u9b42","\u51fa\u4e8e\u610f\u5916","\u9664\u72fc\u5f97\u864e","\u695a\u821e\u5434\u6b4c"],"nue":["\u8650\u8001\u517d\u5fc3"],"shu":["\u8f93\u8d22\u52a9\u8fb9","\u675f\u624b\u5c31\u6baa","\u6811\u9ad8\u62db\u98ce","\u9f20\u9996\u507e\u4e8b","\u675f\u9a6c\u53bf\u8f66","\u5c5e\u8bcd\u6bd4\u4e8b","\u6811\u540c\u62d4\u5f02"],"su":["\u6eaf\u6d41\u5f82\u6e90","\u7d20\u4e0d\u76f8\u80fd","\u7d20\u6627\u751f\u5e73","\u6eaf\u6d41\u6c42\u6e90"],"zei":["\u8d3c\u5fc3\u4e0d\u6b7b","\u8d3c\u4eba\u80c6\u865a"],"lue":["\u7565\u900a\u4e00\u7b79"],"shuo":["\u8bf4\u662f\u8c08\u975e","\u8bf4\u662f\u5f04\u975e","\u8bf4\u5230\u66f9\u64cd","\u8bf4\u4e09\u9053\u56db"],"sheng":["\u7b19\u78ec\u540c\u97f3","\u58f0\u8a89\u9e4a\u8d77","\u58f0\u8272\u4ff1\u5389","\u5347\u5b98\u53d1\u8d22","\u751f\u82b1\u4e4b\u7b14","\u5347\u5802\u5165\u5ba4","\u751f\u52a8\u6d3b\u6cfc","\u76db\u7b75\u96be\u518d","\u751f\u82b1\u5999\u7b14","\u751f\u516c\u8bf4\u6cd5","\u751f\u9f99\u6d3b\u864e","\u58f0\u95fb\u8fc7\u60c5","\u751f\u4e0d\u9022\u65f6"],"pin":["\u725d\u54ae\u9e23\u8fb0","\u54c1\u5934\u8bc4\u8db3","\u725d\u9e21\u53f8\u6668"],"tong":["\u901a\u5e7d\u52a8\u5fae","\u901a\u5357\u5f7b\u5317","\u540c\u888d\u540c\u6cfd","\u540c\u7c7b\u76f8\u4ece","\u540c\u5e74\u800c\u6821","\u7ae5\u53df\u65e0\u6b3a","\u901a\u9996\u81f3\u5c3e","\u901a\u540c\u4f5c\u5f0a","\u901a\u5bb5\u5f7b\u663c","\u75db\u75d2\u76f8\u5173","\u540c\u5fc3\u534f\u529b","\u540c\u529f\u4e00\u4f53","\u540c\u5fc3\u654c\u5ffe","\u901a\u6743\u8fbe\u7406"],"tao":["\u6843\u816e\u67f3\u773c","\u97ec\u6666\u5f85\u65f6","\u6ed4\u5929\u5927\u7f6a","\u97ec\u5149\u706d\u8ff9","\u6843\u82b1\u6d41\u6c34"],"zuo":["\u4f5c\u8f8d\u65e0\u5e38","\u5750\u5730\u5206\u810f","\u5750\u7acb\u4e0d\u5b89","\u5750\u5367\u4e0d\u5b81","\u5750\u5403\u5c71\u5d29","\u5de6\u987e\u53f3\u76fc","\u4f5c\u5978\u72af\u7f6a","\u5de6\u53f3\u9022\u6e90","\u505a\u5f20\u505a\u81f4","\u5750\u4e0d\u7aa5\u5802","\u5de6\u679d\u53f3\u68a7","\u5de6\u5bb6\u5a07\u5973","\u4f5c\u5a01\u4f5c\u798f","\u5750\u4e0d\u5782\u5802","\u5750\u5367\u4e0d\u5b89"],"gou":["\u72d7\u5420\u4e4b\u60ca"],"chuang":["\u5e8a\u4e0a\u8fed\u5e8a","\u6006\u5730\u547c\u5929"],"peng":["\u84ec\u5934\u57a2\u9762","\u84ec\u5934\u8d64\u811a","\u70f9\u9f99\u5e96\u51e4","\u84ec\u751f\u9ebb\u4e2d","\u84ec\u95e8\u835c\u6237"],"hui":["\u6325\u91d1\u5982\u571f","\u7070\u8eab\u6cef\u667a","\u79fd\u5fb7\u57a2\u884c","\u56de\u6587\u7ec7\u9526","\u5599\u957f\u4e09\u5c3a","\u8bb3\u6076\u4e0d\u609b","\u6094\u4e0d\u5f53\u521d","\u56de\u5473\u65e0\u7a77","\u6bc1\u65b9\u74e6\u5408","\u8bf2\u4eba\u4e0d\u5026","\u8bb3\u83ab\u5982\u6df1","\u6bc1\u51a0\u88c2\u88f3","\u96b3\u8282\u8d25\u540d"],"juan":["\u7737\u7737\u4e4b\u5fc3","\u6d93\u6ef4\u4e0d\u6f0f","\u6350\u6b8b\u53bb\u6740","\u5377\u571f\u91cd\u6765"],"gui":["\u9f9f\u51b7\u6418\u5e8a","\u9b3c\u54ed\u7c9f\u98de","\u8d35\u8fdc\u8d31\u8fd1","\u8d35\u8d31\u65e0\u5e38","\u6842\u679d\u7247\u7389","\u8be1\u53d8\u591a\u7aef","\u523f\u5fc3\u6035\u76ee","\u9b3c\u77b0\u9ad8\u660e","\u6842\u5b50\u5170\u5b59","\u8be1\u5f62\u5947\u5236","\u95fa\u82f1\u95f1\u79c0","\u8d35\u4e0d\u53ef\u8a00","\u5f52\u5947\u987e\u602a","\u5f52\u771f\u53cd\u6734","\u9f9f\u9e64\u9050\u9f84","\u5f52\u6839\u5230\u5e95"],"dang":["\u5f53\u98ce\u79c9\u70db","\u5f53\u8033\u65c1\u98ce","\u8361\u6790\u79bb\u5c45"],"niao":["\u9e1f\u557c\u82b1\u6028","\u8885\u8885\u5a09\u5a09","\u9e1f\u58f0\u517d\u5fc3"],"cong":["\u4ece\u6076\u82e5\u5d29","\u806a\u660e\u667a\u80fd","\u4ece\u8f7b\u53d1\u843d","\u4ece\u5bb9\u4e0d\u8feb","\u4ece\u5929\u800c\u964d","\u4ece\u6076\u5982\u5d29","\u4ece\u6076\u662f\u5d29","\u806a\u660e\u4f36\u4fd0","\u4ece\u5934\u5230\u5c3e"],"ting":["\u505c\u59bb\u518d\u5a36","\u5ef7\u4e89\u9762\u6298"],"ke":["\u606a\u5b88\u4e0d\u6e1d","\u53ef\u64cd\u5de6\u5238","\u514b\u55e3\u826f\u88d8","\u514b\u7ecd\u7b95\u88d8","\u514b\u7231\u514b\u5a01","\u523b\u4e0d\u5bb9\u7f13","\u523b\u7fe0\u88c1\u7ea2"],"mai":["\u5356\u5b98\u5356\u7235","\u4e70\u8d31\u5356\u8d35","\u5356\u5251\u4e70\u725b","\u4e70\u4e0a\u544a\u4e0b","\u4e70\u4e1c\u4e70\u897f","\u5356\u7235\u9b3b\u5b98","\u5356\u6587\u4e3a\u751f","\u5356\u513f\u9b3b\u5973","\u5356\u7537\u9b3b\u5973"],"pai":["\u62cd\u624b\u79f0\u5feb","\u6392\u65a5\u5f02\u5df1","\u6392\u96be\u89e3\u7eb7"],"guan":["\u77dc\u529f\u4f10\u5584","\u5173\u95e8\u6253\u72d7","\u5173\u4e1c\u51fa\u76f8","\u89c2\u8fc7\u77e5\u4ec1","\u5b98\u506a\u6c11\u53cd","\u89c2\u7709\u8bf4\u773c","\u9ccf\u5be1\u8315\u72ec","\u5b98\u8fd0\u4ea8\u901a","\u5173\u95e8\u5927\u5409"],"kong":["\u7a7a\u8d39\u8bcd\u8bf4","\u5b54\u5b5f\u4e4b\u9053"],"ni":["\u9006\u98ce\u6076\u6d6a","\u62df\u975e\u5176\u4f26","\u62df\u4e8e\u4e0d\u4f26","\u6ce5\u53e4\u62d8\u65b9","\u6ce5\u591a\u4f5b\u5927"],"qu":["\u795b\u75c5\u5ef6\u5e74","\u66f2\u7709\u4e30\u988a","\u5c48\u6253\u6210\u62db","\u53bb\u6697\u6295\u660e","\u53bb\u592a\u53bb\u751a","\u533a\u533a\u5c0f\u4e8b"],"jue":["\u7edd\u4f26\u9038\u7fa4","\u7edd\u4e16\u8d85\u4f26","\u7edd\u5c11\u5206\u7518","\u51b3\u80dc\u5e99\u5802","\u652b\u4e3a\u5df1\u6709"],"mu":["\u76ee\u5149\u5982\u70ac","\u76ee\u7722\u5fc3\u5ff3","\u66ae\u56db\u671d\u4e09","\u76ee\u4e0d\u8bc6\u4e01","\u76ee\u51fb\u8033\u95fb","\u76ee\u4e71\u7cbe\u8ff7","\u76ee\u4e0d\u8bc6\u4e66","\u76ee\u4e0d\u6687\u7ed9","\u6728\u672c\u6c34\u6e90","\u76ee\u6307\u6c14\u4f7f","\u7267\u8c55\u542c\u7ecf","\u76ee\u4e0d\u5fcd\u7779","\u6c90\u65e5\u6d74\u6708","\u76ee\u4e0d\u89c1\u776b"],"zhan":["\u7c98\u76ae\u5e26\u9aa8","\u6218\u6218\u6817\u6817"],"qiong":["\u7a77\u5c71\u6076\u6c34","\u8315\u8315\u5b51\u7acb","\u7a77\u9014\u672b\u8def"],"gan":["\u7aff\u5934\u65e5\u8fdb","\u611f\u9047\u5fd8\u8eab","\u809d\u5fc3\u82e5\u88c2","\u809d\u80c6\u8fc7\u4eba","\u5e72\u57ce\u4e4b\u5c06","\u6562\u4e0d\u627f\u547d","\u6562\u52c7\u5f53\u5148","\u7518\u6cc9\u5fc5\u7aed","\u6562\u4e3a\u6562\u505a"],"mang":["\u76f2\u98ce\u6666\u96e8","\u76f2\u98ce\u5992\u96e8","\u76f2\u7fc1\u626a\u7c65","\u76f2\u4eba\u8bf4\u8c61"],"jiao":["\u9a84\u5962\u6deb\u4f5a","\u77eb\u5c3e\u5389\u89d2","\u9a84\u513f\u9a03\u5973","\u811a\u4e0d\u6cbe\u5730","\u90ca\u5bd2\u5c9b\u7626","\u9a84\u751f\u60ef\u517b","\u56bc\u58a8\u55b7\u7eb8","\u6322\u6789\u8fc7\u6b63"],"zun":["\u9075\u800c\u52ff\u5931","\u5c0a\u65e0\u4e8c\u4e0a","\u5c0a\u5df1\u5351\u4eba","\u9075\u538c\u5146\u7965","\u5c0a\u53e4\u5351\u4eca"],"ceng":["\u66fe\u6bcd\u6295\u677c"],"tuo":["\u8131\u53e3\u800c\u51fa","\u6258\u7269\u5f15\u7c7b","\u553e\u624b\u53ef\u5f97","\u62d6\u7537\u5e26\u5973","\u6258\u7269\u8fde\u7c7b"],"luo":["\u843d\u8352\u800c\u8d70","\u843d\u53f6\u5f52\u6839","\u843d\u8352\u800c\u9003"],"li":["\u680e\u9633\u96e8\u91d1","\u5386\u4e95\u626a\u5929","\u91cc\u52fe\u5916\u8fde","\u5386\u4e16\u78e8\u949d","\u5229\u6b32\u718f\u5fc3","\u674e\u4e0b\u74dc\u7530","\u7acb\u8c08\u4e4b\u95f4","\u793c\u5c1a\u5f80\u6765","\u529b\u6240\u4e0d\u53ca","\u793c\u5148\u4e00\u996d","\u79bb\u4e16\u5f02\u4fd7","\u5229\u707e\u4e50\u7978","\u7acb\u5730\u4e66\u53a8","\u94c4\u91d1\u70b9\u7389","\u6ca5\u80c6\u96b3\u809d","\u5229\u4e0d\u4e8f\u4e49"],"hai":["\u9a87\u4eba\u542c\u95fb","\u6d77\u5185\u9f0e\u6cb8","\u6d77\u6c34\u7fa4\u98de","\u6d77\u6cb8\u5c71\u88c2","\u6d77\u5578\u5c71\u5d29","\u6d77\u6cb8\u5c71\u5d29","\u6d77\u6c34\u6851\u7530"],"zhou":["\u663c\u4e7e\u5915\u60d5","\u663c\u5e72\u5915\u60d5","\u663c\u8b66\u5915\u60d5","\u9aa4\u4e0d\u53ca\u9632","\u663c\u601d\u591c\u60f3"],"dun":["\u9041\u9634\u533f\u666f","\u987f\u8db3\u6376\u80f8","\u8c5a\u8e44\u7a70\u7530","\u9041\u5929\u500d\u60c5","\u987f\u5b66\u7d2f\u529f"],"mao":["\u5192\u5927\u4e0d\u97ea","\u6bdb\u7fbd\u672a\u4e30","\u8c8c\u662f\u60c5\u975e","\u8c8c\u662f\u5fc3\u975e"],"chuan":["\u4f20\u4e3a\u7b11\u8c08","\u4f20\u98ce\u6247\u706b","\u4e32\u901a\u4e00\u6c14"],"xie":["\u80c1\u80a9\u7d6b\u8db3","\u978b\u5f13\u889c\u5c0f","\u80c1\u80a9\u4f4e\u7709","\u90aa\u4e0d\u72af\u6b63"],"zhuo":["\u6349\u895f\u89c1\u8098","\u5353\u8366\u8d85\u4f26","\u707c\u827e\u5206\u75db","\u707c\u89c1\u771f\u77e5","\u62d9\u5634\u7b28\u816e","\u6349\u895f\u9732\u8098"],"er":["\u8033\u95fb\u76ee\u51fb","\u513f\u5973\u4eb2\u5bb6","\u4e8c\u516b\u4f73\u4eba","\u8033\u987a\u4e4b\u5e74","\u513f\u5973\u60c5\u957f"],"yang":["\u6cf1\u6cf1\u5927\u98ce","\u626c\u6c64\u6b62\u6cb8","\u517b\u5bb6\u6d3b\u53e3","\u517b\u5bb6\u7cca\u53e3","\u4f6f\u8f93\u8bc8\u8d25","\u517b\u513f\u4ee3\u8001","\u517b\u513f\u5f85\u8001","\u517b\u513f\u9632\u8001","\u517b\u5b50\u9632\u8001","\u7f8a\u8d28\u864e\u76ae","\u626c\u5e61\u62db\u9b42","\u4ef0\u4e8b\u4fef\u80b2","\u600f\u600f\u4e0d\u4e50","\u626c\u6e05\u6291\u6d4a","\u517b\u751f\u4e27\u6b7b"],"cao":["\u64cd\u5947\u9010\u8d62","\u8349\u5e90\u4e09\u987e","\u8349\u8863\u6728\u98df"],"chui":["\u5439\u5f39\u5f97\u7834","\u708a\u6c99\u6210\u996d","\u5439\u725b\u62cd\u9a6c","\u5782\u66ae\u4e4b\u5e74","\u69cc\u4ec1\u63d0\u4e49","\u6376\u9aa8\u6ca5\u9ad3","\u5782\u540d\u7af9\u5e1b","\u5439\u5439\u6253\u6253"],"zheng":["\u4e89\u540d\u7ade\u5229","\u6b63\u8a00\u4e0d\u8bb3","\u6574\u8eac\u7387\u7269","\u4e89\u957f\u7ade\u77ed","\u4e89\u957f\u8bba\u77ed","\u4e89\u5f3a\u663e\u80dc","\u72f0\u72de\u9762\u76ee","\u6b63\u8eab\u6e05\u5fc3","\u4e89\u540d\u593a\u5229"],"pi":["\u62ab\u6bdb\u6234\u89d2","\u6279\u9006\u9f99\u9cde","\u62ab\u5fc3\u76f8\u4ed8","\u5339\u592b\u65e0\u7f6a","\u62ab\u9732\u8179\u5fc3","\u5339\u5987\u6c9f\u6e20"],"diu":["\u4e22\u9b42\u5931\u9b44","\u4e22\u76d4\u5f03\u7532","\u4e22\u4e09\u5fd8\u56db","\u4e22\u76d4\u5378\u7532"],"qun":["\u7fa4\u800c\u4e0d\u515a","\u7fa4\u5c45\u7a74\u5904"],"neng":["\u80fd\u4e0a\u80fd\u4e0b","\u80fd\u4e0d\u79f0\u5b98","\u80fd\u4f38\u80fd\u5c48","\u80fd\u5199\u4f1a\u7b97","\u80fd\u5c48\u80fd\u4f38","\u80fd\u5de5\u5de7\u5320","\u80fd\u5f81\u60ef\u6218","\u80fd\u6390\u4f1a\u7b97","\u80fd\u6587\u80fd\u6b66","\u80fd\u7259\u5229\u9f7f"],"ge":["\u5404\u5c3d\u6240\u80fd","\u5272\u5e2d\u5206\u5750","\u5272\u5730\u6c42\u548c","\u9769\u6545\u7acb\u65b0","\u9769\u5978\u94f2\u66b4","\u5272\u895f\u4e4b\u76df","\u4e2a\u4e2d\u5999\u8da3"],"mie":["\u706d\u8662\u53d6\u865e"],"wo":["\u6211\u89c1\u72b9\u601c","\u63e1\u70ad\u6d41\u6c64","\u5367\u69bb\u9f3e\u7761","\u5367\u5e8a\u4e0d\u8d77"],"chao":["\u671d\u594f\u66ae\u53ec","\u671d\u4e0d\u8651\u5915","\u671d\u9954\u5915\u98e7","\u8d85\u7136\u72ec\u5904","\u671d\u8863\u4e1c\u5e02","\u671d\u6881\u66ae\u9648","\u671d\u4e7e\u5915\u6113","\u671d\u4e7e\u5915\u60d5","\u671d\u524d\u5915\u60d5","\u671d\u6c14\u84ec\u52c3","\u671d\u9633\u4e39\u51e4","\u8d85\u7136\u81ea\u5f15","\u8d85\u7136\u8fdc\u5f15","\u5de2\u503e\u5375\u7834","\u8d85\u7136\u8c61\u5916"],"tie":["\u94c1\u7a97\u98ce\u5473","\u94c1\u978b\u8e0f\u7834","\u94c1\u77f3\u5fc3\u80a0","\u94c1\u9762\u5fa1\u53f2"],"zhui":["\u690e\u5fc3\u6ce3\u8840","\u690e\u57cb\u5c60\u72d7","\u690e\u57cb\u72d7\u7a83","\u690e\u57cb\u7a7f\u6398","\u690e\u5929\u62a2\u5730","\u690e\u5fc3\u5455\u8840","\u690e\u5fc3\u987f\u8db3","\u690e\u5fc3\u996e\u6ce3","\u690e\u725b\u53d1\u51a2","\u690e\u725b\u6b43\u8840","\u8ffd\u6839\u7a77\u6e90"],"sui":["\u788e\u7389\u96f6\u7391","\u5c81\u6708\u4e0d\u5c45","\u968f\u8e35\u800c\u81f3","\u968f\u5bd3\u968f\u5b89","\u968f\u884c\u5c31\u5e02","\u968f\u9ad8\u5c31\u4f4e","\u788e\u743c\u4e71\u7389","\u5c81\u5bd2\u4e09\u53cb","\u9042\u5fc3\u6ee1\u610f","\u968f\u58f0\u8d8b\u548c","\u9042\u8ff7\u4e0d\u7ab9"],"pian":["\u7fe9\u7fe9\u5e74\u5c11","\u9a88\u9996\u5c31\u622e","\u7247\u5149\u96f6\u7fbd","\u7247\u8bed\u53ea\u8f9e","\u7fe9\u82e5\u60ca\u9e3f","\u7247\u63a5\u5bf8\u9644","\u7247\u6587\u53ea\u4e8b"],"que":["\u9e4a\u5de2\u9e20\u8e1e","\u5374\u75c5\u5ef6\u5e74","\u5374\u91d1\u66ae\u591c"],"zhang":["\u5f20\u5927\u5176\u8f9e","\u5f20\u8109\u507e\u5174","\u638c\u4e0a\u89c2\u6587","\u5f70\u660e\u662d\u8457"],"nuo":["\u61e6\u8bcd\u602a\u8bf4"],"zang":["\u846c\u8eab\u9c7c\u8179"],"guai":["\u602a\u4e8b\u5484\u5484","\u602a\u529b\u4e71\u795e","\u602a\u58f0\u602a\u6c14","\u602a\u5f62\u602a\u72b6","\u602a\u6a21\u602a\u6837","\u602a\u8bde\u4e0d\u7ecf","\u602a\u8bde\u8be1\u5947","\u602a\u96e8\u76f2\u98ce"],"shao":["\u5c11\u89c1\u591a\u602a","\u5c11\u5b89\u65e0\u8e81"],"qiang":["\u5f3a\u5f29\u4e4b\u672b","\u5899\u5934\u9a6c\u4e0a","\u5899\u82b1\u8def\u67f3","\u5899\u82b1\u8def\u8349","\u5899\u9762\u800c\u7acb","\u5899\u9ad8\u57fa\u4e0b","\u5f3a\u989c\u6b22\u7b11","\u5f3a\u98df\u9761\u89d2"],"jiang":["\u5c06\u673a\u5c31\u8ba1","\u6c5f\u4e1c\u7236\u8001","\u5c06\u9519\u5c31\u9519","\u5c06\u529f\u6298\u7f6a","\u5c06\u76f8\u4e4b\u5668","\u6c5f\u5fc3\u8865\u6f0f","\u6c5f\u6c49\u671d\u5b97"],"kui":["\u9b41\u68a7\u5947\u4f1f","\u7aa5\u7256\u5c0f\u513f","\u63c6\u7406\u5ea6\u52bf","\u8475\u85ff\u503e\u9633"],"zhuai":["\u62fd\u5df7\u5570\u8857"],"nai":["\u4e43\u6587\u4e43\u6b66","\u4e43\u6b66\u4e43\u6587"],"lao":["\u8001\u5e08\u5bbf\u5112","\u52b3\u5fc3\u82e6\u601d","\u8001\u8c0b\u6df1\u7b97","\u52b3\u601d\u9038\u6deb","\u8001\u4e4b\u5c06\u81f3","\u8001\u4e8e\u4e16\u6545","\u8001\u50e7\u5165\u5b9a","\u8001\u5927\u65e0\u6210","\u8001\u5929\u62d4\u5730","\u8001\u5978\u5de8\u6ed1","\u8001\u5978\u5de8\u733e","\u8001\u59aa\u80fd\u89e3","\u8001\u5a46\u5f53\u519b","\u8001\u5b9e\u5df4\u4ea4","\u8001\u5f53\u76ca\u58ee"],"song":["\u5b8b\u7389\u4e1c\u5899","\u9001\u5f80\u52b3\u6765","\u677e\u67cf\u4e4b\u5fd7"],"kuai":["\u5feb\u4eba\u5feb\u4e8b","\u5feb\u4eba\u5feb\u6027","\u5feb\u4eba\u5feb\u8bed","\u5feb\u5200\u65a9\u9ebb","\u5feb\u5fc3\u6ee1\u5fd7","\u5feb\u5fc3\u6ee1\u610f","\u5feb\u5fc3\u9042\u610f","\u5feb\u610f\u5f53\u524d"],"zui":["\u5634\u76f4\u5fc3\u5feb","\u7f6a\u5b7d\u6df1\u91cd","\u7f6a\u4e0d\u53ef\u902d","\u7f6a\u4e0d\u5bb9\u8bdb","\u7f6a\u4e0d\u80dc\u8bdb","\u7f6a\u4e1a\u6df1\u91cd","\u7f6a\u4eba\u4e0d\u5b65","\u7f6a\u52a0\u4e00\u7b49","\u7f6a\u5927\u6076\u6781","\u7f6a\u5e94\u4e07\u6b7b","\u7f6a\u5f53\u4e07\u6b7b","\u7f6a\u6076\u662d\u8457"],"nie":["\u556e\u96ea\u9910\u6be1","\u8e51\u8e7b\u6a90\u7c26","\u8e51\u5f71\u85cf\u5f62"],"nei":["\u5185\u5916\u5939\u653b","\u5185\u5fe7\u5916\u60a3"],"qie":["\u4e14\u98df\u86e4\u870a","\u602f\u9632\u52c7\u6218","\u5207\u5207\u5728\u5fc3","\u5207\u4e2d\u8981\u5bb3","\u4e14\u4f4f\u4e3a\u4f73"],"ci":["\u6b64\u53d1\u5f7c\u5e94","\u8f9e\u5fae\u65e8\u8fdc","\u6b64\u8d77\u5f7c\u4f0f","\u6b64\u4e8b\u4f53\u5927","\u8f9e\u4e25\u4e49\u6b63"],"kuang":["\u65f7\u53e4\u7edd\u4f26","\u65f7\u53e4\u5947\u95fb","\u5321\u4e71\u53cd\u6b63","\u65f7\u592b\u6028\u5973"],"lei":["\u78ca\u843d\u8f76\u8361","\u7d2f\u6559\u4e0d\u6539","\u6cea\u5e72\u80a0\u65ad","\u7d2f\u5c4b\u91cd\u67b6","\u7c7b\u805a\u7fa4\u5206"],"ya":["\u775a\u7726\u5fc5\u62a5","\u7259\u7b7e\u4e07\u8f74","\u4e9a\u80a9\u53e0\u80cc"],"ruan":["\u8f6f\u88d8\u5feb\u9a6c","\u8f6f\u7ea2\u5341\u4e08"],"lan":["\u5170\u827e\u96be\u5206","\u63fd\u540d\u8d23\u5b9e","\u5170\u8d28\u85b0\u5fc3","\u5170\u718f\u6842\u99a5"],"che":["\u5f7b\u91cc\u5f7b\u5916"],"chen":["\u6c89\u58f0\u9759\u6c14","\u6c89\u601d\u719f\u8651","\u9648\u8a00\u52a1\u53bb","\u6c89\u821f\u7834\u91dc","\u9648\u9648\u76f8\u56e0"],"bang":["\u508d\u89c2\u8005\u6e05"],"huo":["\u706b\u4e0a\u52a0\u6cb9","\u706b\u4e0a\u5f04\u51b0","\u706b\u4e0a\u6d47\u6cb9","\u706b\u4e0a\u6dfb\u6cb9","\u706b\u4e2d\u53d6\u6817","\u706b\u4f1e\u9ad8\u5f20","\u706b\u5149\u70db\u5929","\u706b\u5192\u4e09\u4e08","\u706b\u5192\u4e09\u5c3a","\u706b\u59bb\u7070\u5b50","\u8c41\u4eba\u8033\u76ee","\u8d27\u8d3f\u516c\u884c","\u7978\u798f\u6709\u547d","\u83b7\u9647\u671b\u8700","\u706b\u70db\u5c0f\u5fc3","\u706b\u8028\u5200\u8015","\u6d3b\u5265\u751f\u541e","\u7978\u4e0d\u5355\u884c","\u7978\u4e0d\u65cb\u8e35","\u7978\u4e2d\u6709\u798f","\u7978\u4e3a\u798f\u5148","\u7978\u4e71\u6ed4\u5929","\u7978\u4ece\u53e3\u51fa","\u7978\u4ece\u53e3\u751f","\u7978\u4ece\u5929\u964d"],"zhai":["\u6458\u53e5\u5bfb\u7ae0"],"meng":["\u8499\u4ee5\u517b\u6b63","\u8499\u8882\u8f91\u5c66"],"hou":["\u540e\u7ee7\u6709\u4eba","\u539a\u5f80\u8584\u6765"],"ai":["\u7231\u5c4b\u53ca\u4e4c","\u54c0\u9e3f\u904d\u91ce","\u7231\u624d\u5982\u547d","\u6328\u80a9\u53e0\u80cc"],"shang":["\u4e0a\u65b9\u4e0d\u8db3","\u4e0a\u4e0b\u540c\u95e8","\u8d4f\u8d24\u4f7f\u80fd","\u4f24\u5fc3\u60e8\u76ee","\u8d4f\u4fe1\u7f5a\u5fc5","\u4e0a\u533b\u533b\u56fd","\u4e0a\u4e0d\u7740\u5929","\u8d4f\u540c\u7f5a\u5f02","\u4e0a\u6ea2\u4e0b\u6f0f","\u8d4f\u4fe1\u7f5a\u660e"],"men":["\u95e8\u4e0d\u505c\u5bbe","\u95e8\u4e0d\u591c\u5173","\u95e8\u4e0d\u591c\u6243","\u95e8\u5230\u6237\u8bf4","\u95e8\u5355\u6237\u8584","\u95e8\u53ef\u5f20\u7f57","\u95e8\u53ef\u7f57\u96c0","\u95e8\u582a\u7f57\u96c0","\u95e8\u5899\u6843\u674e"],"dui":["\u5bf9\u5ba2\u6325\u6beb","\u5bf9\u666f\u4f24\u60c5","\u5bf9\u5e8a\u591c\u8bed"],"zong":["\u7eb5\u6a2a\u4ea4\u8d2f","\u7eb5\u6a2a\u5929\u4e0b","\u603b\u800c\u8a00\u4e4b"],"shan":["\u6247\u706b\u6b62\u6cb8","\u5c71\u660e\u6c34\u79c0","\u5c71\u7ae5\u77f3\u70c2","\u5c71\u6c34\u76f8\u8fde","\u5c71\u6bbd\u91ce\u6e4b","\u5584\u7537\u4fe1\u5973","\u5c71\u4e2d\u5bb0\u76f8","\u5c71\u4e8f\u4e00\u7bd1","\u5c71\u5149\u6c34\u8272","\u5c71\u516c\u5012\u8f7d","\u5c71\u5305\u6d77\u5bb9","\u5c71\u5357\u6d77\u5317","\u5c71\u541f\u6cfd\u5531","\u5c71\u547c\u6d77\u5578","\u5c71\u5d29\u5730\u577c","\u5c71\u79ef\u6ce2\u59d4"],"tang":["\u6c64\u53bb\u4e09\u9762","\u6c64\u6c60\u94c1\u57ce","\u6c64\u70e7\u706b\u70ed","\u5802\u4e0a\u4e00\u547c","\u5802\u54c9\u7687\u54c9","\u5802\u5802\u4e00\u8868","\u5802\u5802\u6b63\u6b63","\u5802\u7687\u51a0\u5195","\u5802\u7687\u5bcc\u4e3d","\u5802\u7687\u6b63\u5927","\u5802\u800c\u7687\u4e4b"],"gang":["\u521a\u76f4\u4e0d\u963f","\u7eb2\u63d0\u9886\u6308"],"cui":["\u6467\u7709\u6298\u8170","\u7fe0\u7af9\u9ec4\u82b1"],"cu":["\u7c97\u8863\u6de1\u996d","\u731d\u4e0d\u53ca\u9632"],"yun":["\u4e91\u5408\u666f\u4ece","\u4e91\u96c6\u666f\u4ece","\u4e91\u5f00\u89c1\u65e5","\u4e91\u98de\u70df\u706d","\u4e91\u5e03\u96e8\u65bd","\u4e91\u4e2d\u4ed9\u9e64","\u4e91\u5c6f\u9e1f\u6563","\u4e91\u96e8\u5deb\u5c71","\u4e91\u5f00\u89c1\u5929"],"ang":["\u6602\u7136\u81ea\u82e5"],"ta":["\u4ed6\u5c71\u653b\u9519"],"za":["\u6742\u4e03\u6742\u516b","\u6742\u4e71\u65e0\u5e8f","\u6742\u4e71\u65e0\u7ae0"],"la":["\u62c9\u62c9\u6742\u6742","\u62c9\u4e09\u626f\u56db","\u62c9\u5e2e\u7ed3\u6d3e"],"rou":["\u67d4\u80a0\u767e\u7ed3","\u67d4\u5fc3\u5f31\u9aa8","\u8089\u773c\u611a\u7709"],"huan":["\u60a3\u5f97\u60a3\u5931","\u7f13\u6025\u76f8\u6d4e"],"zeng":["\u589e\u7816\u6dfb\u74e6"],"lang":["\u72fc\u987e\u9e22\u89c6","\u72fc\u987e\u864e\u89c6","\u72fc\u568e\u9b3c\u53eb"],"lin":["\u9cde\u6b21\u6809\u6bd4","\u9cde\u6b21\u76f8\u6bd4","\u9cde\u8403\u6bd4\u6809","\u9cde\u96c6\u4ef0\u6d41","\u9cde\u96c6\u6bdb\u8403","\u4e34\u522b\u8d60\u8bed","\u4e34\u6587\u4e0d\u8bb3","\u4e34\u96be\u65e0\u6151","\u4e34\u6c34\u767b\u5c71","\u4e34\u6e34\u7a7f\u4e95","\u4e34\u6c60\u5b66\u4e66","\u6797\u6797\u603b\u603b"],"dou":["\u6597\u6c34\u6d3b\u9cde","\u6597\u8273\u4e89\u8f89","\u90fd\u4fde\u5401\u5488"],"duan":["\u65ad\u7fbd\u7edd\u9cde","\u65ad\u8896\u4e4b\u5ba0","\u65ad\u6728\u6398\u5730","\u77ed\u4e2d\u53d6\u957f","\u77ed\u5175\u63a5\u6218","\u77ed\u5175\u76f8\u63a5","\u77ed\u5200\u76f4\u5165","\u77ed\u53f9\u957f\u5401","\u77ed\u5403\u5c11\u7a7f","\u77ed\u57a3\u81ea\u903e","\u77ed\u5bff\u4fc3\u547d","\u77ed\u5c0f\u7cbe\u608d","\u77ed\u7ee0\u6c72\u6df1","\u65ad\u957f\u7eed\u77ed","\u65ad\u5934\u5c06\u519b","\u65ad\u5b50\u7edd\u5b59","\u65ad\u58c1\u9893\u57a3"],"se":["\u94e9\u7fbd\u66b4\u9cde","\u94e9\u7fbd\u6db8\u9cde","\u8272\u4ec1\u884c\u8fdd","\u8272\u5389\u5185\u834f","\u8272\u5389\u80c6\u8584","\u8272\u5982\u6b7b\u7070","\u8272\u6388\u9b42\u4e0e","\u8272\u80c6\u5305\u5929","\u8272\u80c6\u5982\u5929","\u8272\u80c6\u8ff7\u5929","\u8272\u8272\u4ff1\u5168","\u8272\u82e5\u6b7b\u7070"],"fo":["\u4f5b\u5fc3\u86c7\u53e3","\u4f5b\u6027\u7985\u5fc3"],"hen":["\u6068\u5165\u9aa8\u9ad3","\u6068\u5982\u5934\u918b"],"tiao":["\u6311\u7259\u6599\u5507","\u6761\u89e3\u652f\u5288"],"ruo":["\u82e5\u6d89\u6e0a\u51b0","\u5f31\u672c\u5f3a\u672b","\u82e5\u5375\u6295\u77f3"],"kun":["\u6083\u610a\u65e0\u534e"],"guang":["\u5149\u5929\u5316\u65e5","\u5e7f\u571f\u4f17\u6c11"],"ze":["\u6603\u98df\u5bb5\u8863"],"cou":["\u85ae\u4e2d\u8346\u66f2"],"lou":["\u9542\u51b0\u708a\u783e","\u697c\u9601\u4ead\u53f0","\u6f0f\u536e\u96be\u6ee1","\u6f0f\u5c3d\u66f4\u9611","\u6f0f\u5c3d\u949f\u9e23","\u6f0f\u5c3d\u953a\u9e23","\u6f0f\u6cc4\u5929\u673a","\u6f0f\u6cc4\u6625\u5149","\u6f0f\u6d1e\u767e\u51fa","\u6f0f\u6d29\u6625\u5149","\u6f0f\u7f51\u4e4b\u9c7c"],"re":["\u70ed\u706b\u671d\u5929","\u60f9\u707e\u62db\u7978","\u60f9\u8349\u62c8\u82b1"],"sang":["\u6851\u571f\u4e4b\u9632","\u4e27\u5929\u5bb3\u7406","\u6851\u95f4\u4e4b\u97f3","\u4e27\u80c6\u4ea1\u9b42","\u4e27\u80c6\u6e38\u9b42","\u4e27\u80c6\u9500\u9b42"],"wa":["\u74e6\u91dc\u96f7\u9e23"],"lun":["\u8bba\u9ad8\u5be1\u5408"],"ao":["\u71ac\u6cb9\u8d39\u706b","\u50b2\u7768\u4e07\u7269","\u9ccc\u63b7\u9cb8\u541e"],"geng":["\u7fb9\u85dc\u5505\u7cd7","\u8015\u5f53\u95ee\u5974","\u8015\u8018\u6811\u827a"],"sha":["\u6740\u4e00\u5106\u767e","\u6740\u4e00\u5229\u767e","\u6740\u4e00\u783a\u767e","\u6740\u4e00\u8b66\u767e","\u6740\u4eba\u5982\u8349","\u6740\u4eba\u5982\u84bf","\u6740\u4eba\u5982\u84fa","\u6740\u4eba\u5982\u9ebb"],"a":["\u963f\u65f6\u8d8b\u4fd7"],"piao":["\u98d8\u840d\u6d6a\u8ff9","\u6f02\u6bcd\u8fdb\u996d"],"pu":["\u4ec6\u4ec6\u98ce\u5c18","\u94fa\u5f20\u626c\u5389","\u666e\u5929\u7387\u571f"],"zhe":["\u7740\u624b\u6210\u6625"],"chai":["\u8c7a\u72fc\u4e4b\u543b"],"lai":["\u6765\u8005\u52ff\u62d2","\u6765\u4e4b\u4e0d\u6613","\u6765\u52bf\u6c79\u6c79","\u6765\u5386\u4e0d\u660e","\u6765\u53bb\u5206\u660e","\u6765\u53bb\u65e0\u8e2a","\u6765\u56de\u6765\u53bb","\u6765\u56e0\u53bb\u679c","\u6765\u5904\u4e0d\u6613","\u6765\u597d\u606f\u5e08"],"kuan":["\u5bbd\u8c41\u5927\u5ea6"],"ben":["\u7b28\u9e1f\u5148\u98de"],"hei":["\u9ed1\u706f\u4e0b\u706b","\u9ed1\u767d\u5206\u660e"],"zha":["\u4e4d\u6bdb\u53d8\u8272","\u8bc8\u8d25\u4f6f\u8f93"],"niu":["\u725b\u542c\u5f39\u7434"],"ti":["\u4f53\u56fd\u7ecf\u91ce","\u4f53\u5927\u601d\u7cbe","\u4f53\u6064\u5165\u5fae","\u4f53\u65e0\u5b8c\u76ae","\u4f53\u65e0\u5b8c\u80a4","\u4f53\u7269\u7f18\u60c5","\u4f53\u89c4\u753b\u5706","\u4f53\u8d34\u5165\u5999","\u4f53\u8d34\u5165\u5fae"],"cha":["\u63d2\u7fc5\u96be\u98de"],"tuan":["\u629f\u5fc3\u58f9\u5fd7"],"wai":["\u5916\u5bbd\u5185\u6df1","\u5916\u65b9\u5185\u5458"],"keng":["\u5fd0\u4e0a\u5fd1\u4e0b"],"sun":["\u635f\u4e0a\u76ca\u4e0b"],"pao":["\u530f\u74dc\u7a7a\u60ac"],"tai":["\u592a\u5e73\u65e0\u4e8b","\u53f0\u9601\u751f\u98ce"],"gai":["\u6539\u6362\u95e8\u6963"],"pou":["\u5256\u5e7d\u6790\u5fae"],"ce":["\u7b56\u9a7d\u783a\u949d"],"zuan":["\u94bb\u5c71\u585e\u6d77"],"miu":["\u8c2c\u5984\u65e0\u7a3d"],"ga":["\u5477\u918b\u8282\u5e05"],"pa":["\u6015\u786c\u6b3a\u8f6f"]}',true);
       self::$utf8 = array(

            "A" => array(59371, 41648, 50400, 33157, 41392, 18661, 47599),

            "Ai" => array(19697, 32178, 35504, 36856, 20712, 25068, 28663, 26608, 29399, 19381, 17099, 47497, 30339, 43240, 54250, 56459, 45201, 25005, 57749, 17131, 36057, 28596, 49375, 29162, 55685, 31713, 27114, 64665, 19190, 56536, 37508, 22145, 59104, 42373, 18930, 17311, 30185, 29599, 54922, 60552, 35971, 19670, 27069, 47505, 56476, 52365, 63875, 43184, 17031, 45460, 45466, 43440, 32176, 44464, 57310, 36230, 41904, 42672, 42928, 42416, 42160, 18330, 22758, 52719, 58012, 27797, 45716, 44208, 44720, 23788, 45302, 25559, 49645, 30387, 51430, 56208, 24969, 51680, 44976, 16588, 46209, 43696, 43952, 18334, 57994, 29916, 51424, 34439),

            "An" => array(63223, 39405, 58764, 17125, 31621, 34691, 56712, 18059, 46512, 33240, 42376, 22239, 20462, 39914, 36586, 64753, 21940, 18566, 20963, 29912, 29649, 37368, 23685, 26617, 22193, 47024, 25589, 19441, 40169, 36845, 45488, 29099, 29640, 37881, 24205, 61928, 55010, 17352, 50928, 36553, 22468, 30127, 32968, 27275, 22997, 20438, 53210, 20913, 45232, 38124, 35051, 45446, 41371, 18887, 47280, 46256, 40328, 16612, 60897, 46768, 20417, 38293, 64475, 34438, 46000, 62337, 45744, 61150, 16619, 42991),

            "Ang" => array(47536, 23265, 28309, 35734, 48048, 27873, 25075, 28293, 60556, 47792),

            "Ao" => array(37812, 35058, 40372, 42889, 52214, 33486, 24727, 18407, 53663, 45725, 31899, 33016, 52359, 50823, 21984, 24312, 27825, 57056, 20418, 49638, 49328, 20457, 35723, 44769, 23762, 55006, 25286, 38902, 59895, 29178, 33276, 27282, 21906, 17293, 42377, 49565, 21390, 50352, 37846, 22410, 61926, 21386, 49584, 49840, 44683, 21137, 41463, 37590, 19179, 36997, 48096, 62854, 58765, 48560, 28320, 60123, 48304, 33160, 49302, 17885, 56034, 17821, 49072, 30900, 64241, 64754, 19394, 21706, 18605, 34730, 57833, 56293, 45971, 48816, 64915, 50096),

            "Ba" => array(34039, 33780, 43397, 24280, 39649, 37820, 27329, 19917, 58272, 27026, 55516, 57246, 27312, 52912, 33418, 31368, 49814, 52980, 51888, 51376, 51120, 23446, 52656, 38017, 35063, 20213, 52144, 20877, 22699, 52400, 24198, 50864, 50608, 45537, 51632, 17034, 24515, 40646, 54704, 58334, 38362, 41608, 54960, 28818, 23686, 31119, 53750, 21697, 45541, 52873, 54448, 61849, 51677, 17909, 34514, 18099, 54192, 21213, 21743, 51703, 53168, 31188, 38881, 50141, 53424, 36745, 52200, 40888, 38652, 23266, 53680, 29104, 55790),

            "Bai" => array(47607, 46558, 56496, 56752, 41364, 34194, 57230, 49887, 22442, 57008, 38105, 30445, 25291, 35820, 40891, 28626, 26758, 56240, 55472, 57494, 55728, 55216, 37778, 23444, 29112, 65258, 55984, 37819, 23997),

            "Baike" => array(50307),

            "Baiwa" => array(17070),

            "Ban" => array(31675, 54254, 45812, 27618, 23246, 39597, 59056, 57563, 59098, 60044, 19605, 58800, 37364, 39913, 45212, 59312, 29878, 28382, 23523, 38026, 59824, 60336, 60592, 59568, 17808, 20413, 60848, 37268, 44694, 16859, 20411, 58032, 19329, 33939, 28040, 27870, 33746, 29150, 22776, 21187, 53384, 17558, 41969, 17390, 34510, 36046, 38865, 51860, 57776, 57520, 58288, 58544, 57264, 44529, 55777, 60080, 27614, 34796),

            "Bang" => array(31693, 63664, 62640, 35251, 63152, 38039, 39051, 62128, 59270, 42739, 63920, 26539, 53135, 63408, 37061, 29398, 24294, 19918, 62173, 42400, 36796, 19405, 40118, 22921, 28659, 61616, 47844, 45198, 49294, 51858, 61360, 61104, 36749, 19597, 41096, 21183, 39391, 30194, 29587, 35261, 61872, 62384, 45714, 51336, 52622, 17645),

            "Bao" => array(43697, 64688, 56449, 64176, 64432, 59609, 57318, 25805, 41622, 63193, 55750, 33668, 17799, 26803, 26321, 43185, 62596, 65200, 42929, 56975, 29928, 41393, 25836, 34265, 25848, 40395, 38796, 39564, 40376, 44209, 56981, 62344, 17891, 35024, 39111, 49397, 39144, 43953, 29676, 22005, 39043, 39372, 36595, 25331, 43441, 35774, 42375, 16784, 42673, 41649, 42417, 41905, 37547, 45552, 39819, 37303, 32202, 46582, 53996, 64944, 38633, 24573, 19154, 21240, 42161, 37615, 57821, 38639, 55793, 26865, 32395, 34700, 59272),

            "Be" => array(24776),

            "Bei" => array(17896, 27080, 17381, 34246, 49303, 30639, 31957, 51350, 31638, 50136, 64987, 37783, 58354, 49881, 29881, 59866, 47793, 47537, 27052, 19421, 45745, 18051, 58498, 45954, 48049, 52098, 26263, 17580, 51856, 54765, 24292, 34269, 30353, 19644, 52726, 25587, 21205, 60893, 18102, 37837, 52640, 55537, 20138, 26336, 51184, 41955, 36299, 27897, 45489, 54662, 25747, 44977, 45233, 63202, 44465, 41136, 18327, 28131, 44721, 46513, 28870, 28802, 46769, 46257, 46240, 46001, 64986, 47025, 47281, 37080, 19349),

            "Ben" => array(51102, 19607, 55698, 61847, 52955, 49073, 53467, 53126, 36801, 19850, 19944, 63647, 35498, 39389, 57491, 56042, 48305, 18399, 38530, 48561, 31131, 64137, 24732, 20965, 48817, 50336, 48367, 28367, 21465),

            "Beng" => array(50097, 40684, 26028, 17864, 49841, 25004, 43400, 62687, 47833, 46314, 18409, 34751, 27785, 19167, 19931, 50609, 41436, 49585, 27837, 50353, 49329, 21130, 51329, 28853, 25065, 53389, 54431, 16869, 28061, 54496, 62850, 28335, 22718, 25063),

            "Bi" => array(24008, 50326, 24983, 54961, 23235, 23529, 63205, 35983, 58248, 24041, 55522, 48870, 60124, 24259, 21167, 33195, 56753, 53425, 59886, 35792, 34222, 63969, 53136, 47587, 54449, 38303, 64668, 58596, 29686, 25284, 18933, 39629, 40137, 52657, 59799, 37519, 55795, 38581, 31408, 41116, 30420, 19929, 62598, 20698, 30137, 17369, 53681, 55775, 52145, 18607, 22988, 57065, 43414, 62959, 33211, 31419, 51889, 43485, 52213, 24987, 40636, 45272, 61323, 28149, 51377, 64905, 65253, 49631, 54145, 24982, 45300, 40582, 39903, 40407, 61829, 54193, 35978, 20624, 33734, 28334, 45038, 35478, 26248, 55425, 33218, 51633, 28920, 20665, 34008, 63108, 54705, 53169, 55473, 53937, 53237, 54513, 20696, 50865, 51354, 49026, 42480, 37838, 34044, 30638, 32475, 39929, 49804, 28336, 28607, 52106, 24762, 21497, 29158, 30419, 51121, 23786, 56497, 23785, 34810, 31482, 24714, 46568, 35040, 31728, 49911, 16621, 49300, 43237, 56241, 35803, 22208, 50676, 30964, 18138, 38135, 36338, 19676, 19420, 26578, 16615, 21485, 31725, 18427, 63475, 33980, 33168, 22416, 41703, 59540, 37313, 35754, 22927, 42909, 29922, 50830, 17905, 19383, 52401, 36010, 59625, 60403, 30393, 35552, 52913, 25022, 50652, 49640, 29673, 33777, 62168, 53218, 36851, 18403, 54502, 51174, 55985, 36847, 37876, 55217, 61658, 37816, 22979, 50574, 22721, 19908, 19410, 39565, 52895),

            "Bian" => array(22725, 16634, 22191, 39404, 41456, 21459, 42144, 28894, 33751, 59569, 59313, 23022, 59057, 54519, 57265, 29128, 54508, 57521, 28842, 48877, 55027, 36037, 40126, 25493, 58505, 60131, 53468, 54750, 20365, 52367, 58545, 29417, 26590, 59825, 36050, 20371, 49895, 19374, 36793, 56557, 18615, 50832, 19867, 53976, 18649, 56305, 17596, 60898, 23698, 52699, 58801, 30200, 30923, 47601, 58033, 20966, 65014, 34015, 41130, 36542, 63986, 34271, 57009, 55198, 57777, 26043, 25590, 25334, 58289, 35553),

            "Biao" => array(26528, 16837, 32982, 37323, 25758, 39385, 21479, 41155, 48270, 27375, 61679, 34231, 23535, 39555, 62694, 52120, 21231, 17866, 64924, 53151, 60593, 44524, 44780, 56047, 42737, 33275, 27887, 28399, 27778, 49043, 32409, 27877, 18130, 53903, 58072, 22954, 29380, 52966, 17143, 42999, 38357, 22428, 60849, 48102, 20979, 29672, 35570, 53745, 26554, 43500, 21747, 60081, 60337, 48360, 30601, 27631, 18307),

            "Bie" => array(28074, 38287, 21680, 61873, 61361, 61105, 33532, 35788, 38653, 19959, 25988, 49141, 33207, 26831, 54927, 22738, 50579, 29389, 25031, 61617),

            "Bin" => array(22516, 62641, 55791, 26329, 18846, 34435, 60393, 57079, 30963, 58343, 63409, 27886, 23784, 26840, 39375, 63467, 57498, 24512, 40915, 26073, 28845, 19870, 22451, 50935, 63153, 40652, 39641, 37855, 40132, 39834, 20628, 35315, 61850, 27806, 40435, 62129, 41198, 50409, 40620, 17900, 62897, 52711, 21466, 50071, 62385, 53209),

            "Bing" => array(36541, 35479, 37559, 32177, 44775, 29645, 22256, 61582, 38792, 54670, 64945, 58241, 41650, 37090, 30179, 36844, 40687, 63449, 60058, 63665, 63921, 56982, 62098, 32919, 30338, 38273, 21424, 21168, 16823, 64473, 35300, 35225, 30150, 64689, 23701, 28053, 64177, 28050, 21648, 64433, 64474, 22188, 30442, 65201, 23968, 26860, 51944, 58006, 57068, 61662, 16597, 60546, 42882, 28856, 41394, 32140),

            "Bo" => array(59373, 36272, 32232, 29138, 28621, 36281, 28147, 56736, 41906, 42228, 28915, 55449, 19671, 38044, 38344, 43186, 42674, 26800, 43231, 48880, 20170, 23740, 41707, 17329, 19139, 20729, 22668, 50577, 44466, 42656, 45746, 34757, 26609, 17393, 47519, 27523, 29866, 43954, 37858, 19427, 16881, 56309, 25572, 45199, 29111, 46002, 21173, 28390, 32442, 28120, 19153, 44681, 17641, 18161, 38385, 21970, 28656, 27824, 36800, 44722, 40321, 45490, 24472, 20983, 41952, 59808, 46258, 65184, 44978, 46514, 50402, 62949, 42162, 62349, 24707, 56467, 42418, 63120, 23779, 17076, 37618, 26759, 16604, 37300, 18416, 37805, 49630, 35485, 19351, 44210, 57582, 29081, 31414, 22730, 24476, 27315, 37774, 43442, 37840, 45234, 17105, 38061, 34458, 20098, 21714, 44254, 29894, 43698, 24771, 43410, 49819, 61913, 21216, 42930, 47026),

            "Bu" => array(24250, 53633, 50309, 48562, 48306, 48050, 19705, 20987, 63877, 49330, 46728, 35728, 50066, 53124, 53486, 26778, 27034, 36522, 18424, 52970, 39138, 25557, 57326, 52709, 28045, 61326, 19184, 19422, 46770, 25041, 47282, 47538, 46069, 45791, 23495, 49074, 49046, 34538, 58515, 62099, 59274, 41100, 36278, 53650, 54494, 29369, 35829, 22403, 17807, 25314, 46058, 47794, 40649, 23003, 57316, 48818, 22768, 24288, 38365),

            "Ca" => array(52615, 25492, 49586, 60128, 58861, 26549, 32436, 21913, 28383, 61570),

            "Cai" => array(58769, 51634, 30144, 39554, 50824, 30092, 59786, 50098, 38104, 49842, 50818, 50610, 50354, 50866, 51890, 61842, 18579, 52402, 28351, 16786, 37510, 36759, 51122, 52146, 20699, 23230, 51378),

            "Cal" => array(27521),

            "Can" => array(23708, 61157, 46995, 64661, 53938, 21712, 19345, 27527, 38033, 20944, 19601, 53682, 34970, 19857, 24014, 24503, 62967, 31904, 36310, 45800, 20128, 54173, 34179, 28668, 54194, 60555, 54260, 53170, 53426, 16775, 37879, 23030, 40950, 25786, 31727, 52914, 41605, 41861, 17639, 35567, 57229, 37532, 56203, 52658, 35314, 58001, 53382, 35547, 54407, 61158, 42117, 19659),

            "Cang" => array(55218, 19845, 27082, 18938, 39104, 16591, 55474, 58009, 23482, 39596, 45290, 35289, 34536, 54962, 37829, 24059, 32130, 54450, 63448, 43137, 57730, 54706, 64387, 33194, 28361, 59036, 20638, 51341),

            "Cao" => array(16872, 62338, 63717, 18065, 64912, 18386, 18627, 46044, 24530, 55699, 30962, 36860, 18630, 56754, 62352, 43153, 55730, 55986, 61156, 39113, 37856, 56242, 43507, 59021, 63893, 56498, 48628, 53472, 23527),

            "Ce" => array(57266, 28104, 31132, 43147, 23225, 48782, 30461, 50582, 64992, 40632, 64142, 22984, 37051, 50576, 57522, 58034, 37266, 64738, 21191, 39060, 51330, 33454, 57010, 54403, 30857, 33737, 35473, 30138, 57778, 35717, 27577, 35769),

            "Cen" => array(29079, 32452, 47588, 37560, 20123, 38323, 45025),

            "Ceng" => array(63700, 18841, 54759, 57824, 54156, 39666, 58546, 58290, 32184, 62093, 38335),

            "Ceok" => array(37555, 32947),

            "Ceom" => array(19341),

            "Ceon" => array(26026),

            "Ceor" => array(30081),

            "Cha" => array(37075, 60338, 46994, 45698, 58802, 51170, 25491, 25029, 57990, 48872, 59058, 35028, 60594, 41107, 19346, 39139, 20422, 20882, 61362, 51951, 59826, 20167, 56028, 59570, 39553, 46825, 59314, 52118, 30956, 49037, 37768, 37317, 48274, 45533, 24215, 39854, 39653, 26550, 27888, 23782, 60082, 20675, 58083, 61106, 60850, 26506, 61580, 38609, 63361, 28860, 20450, 44009, 36052, 45542, 52974, 50161, 30852, 57321, 61423, 33499, 25832, 43746),

            "Chai" => array(20426, 36806, 32181, 62130, 61618, 46726, 35459, 35535, 25341, 47094, 61874, 44505, 60380, 45810, 53383, 58784, 53380, 33744, 64496),

            "Chan" => array(19919, 58004, 25479, 20711, 28897, 16832, 40406, 21994, 40430, 53127, 44678, 26558, 44190, 18056, 46979, 42213, 58253, 59097, 24216, 58509, 55169, 40912, 25731, 33937, 30109, 56211, 36225, 26501, 52870, 21202, 64690, 17301, 63666, 23939, 34474, 62898, 40607, 51339, 46492, 63724, 16611, 63154, 21461, 25060, 17343, 30388, 21942, 46234, 64996, 61925, 31619, 56546, 43165, 37015, 63410, 25554, 53233, 31710, 59626, 54417, 35011, 32975, 54246, 36233, 31639, 62642, 51854, 25298, 30356, 49126, 27108, 48531, 62386, 38866, 26577, 39648, 58095, 50906, 25006, 25262, 63922, 32132, 47771, 27012, 34267, 20609, 64434, 56285, 29386, 32469, 35049, 60831, 49806, 18845, 38276, 56717, 39059, 64178, 37616, 47347, 40672, 49543, 51849, 22464, 44420, 26014, 29647, 42883, 26254, 36254, 17094, 35799, 33256, 24045, 19433, 61685, 55705, 28864, 29632, 28602, 63206, 57306, 58338, 33715, 53137, 32983, 36823),

            "Chang" => array(24549, 20458, 35817, 61686, 44931, 51095, 19446, 28113, 25772, 41192, 36348, 41651, 19945, 42419, 41907, 38551, 43187, 19689, 39875, 40833, 42163, 47235, 42675, 51676, 53731, 48614, 43955, 43443, 52187, 44172, 43699, 24747, 60130, 38021, 22915, 21391, 43499, 37092, 40336, 33964, 29826, 64946, 58593, 17308, 65202, 63192, 34207, 45973, 39086, 27605, 28653, 50653, 39061, 38391, 44771, 24271, 19687, 27895, 24238, 19591, 50922, 40839, 38019, 53222, 25540, 27273, 41132, 29124, 38628, 63112, 20424, 42931, 41395, 17582),

            "Chao" => array(31374, 42983, 63458, 45747, 23175, 60383, 32911, 44467, 19128, 32218, 25278, 63897, 64925, 21951, 25046, 52460, 43416, 44723, 32187, 28386, 44979, 40864, 42116, 40639, 52202, 32224, 51352, 46003, 46259, 31921, 47007, 45491, 39638, 48275, 22209, 57476, 17374, 31740, 35034, 40699, 21149, 29087, 59889, 26067, 34300, 45235, 41857, 20180, 27790, 19390, 17085, 44211, 40577),

            "Che" => array(47795, 61321, 34208, 18067, 50054, 30130, 25044, 61316, 47283, 36019, 28871, 29062, 46771, 44674, 25226, 56723, 46483, 47853, 46515, 25503, 48257, 34780, 25986, 37078, 47539, 37581, 29634, 19615, 17823, 19182, 58245, 47027, 55439, 35550, 36275, 58843),

            "Chen" => array(23778, 23187, 35743, 55277, 25546, 38361, 28041, 37594, 28154, 27851, 55184, 38364, 35323, 59029, 36843, 18895, 32137, 63113, 46313, 26330, 47512, 31707, 41347, 23037, 23293, 50355, 47239, 19887, 29394, 33967, 46070, 51418, 50099, 49817, 20919, 54238, 17598, 49632, 41448, 45719, 24498, 32981, 39386, 17794, 28633, 48051, 21206, 25502, 49387, 53227, 18071, 19178, 23689, 55186, 41879, 25279, 28374, 37551, 27591, 48819, 18335, 36069, 37098, 18644, 49075, 40340, 47077, 24519, 37062, 48307, 49331, 61933, 48563, 51175, 36318, 49843, 49587),

            "Cheng" => array(35992, 56454, 27366, 35987, 44179, 28906, 53171, 19168, 51176, 53427, 61838, 23681, 51123, 53683, 37264, 27532, 53939, 49034, 37041, 51891, 18418, 34226, 25831, 54195, 44957, 28903, 35312, 25238, 51635, 43480, 19432, 48015, 30605, 57736, 52659, 61934, 38083, 40119, 37877, 48279, 29337, 51379, 54241, 51690, 52403, 40619, 56978, 29426, 52625, 24263, 37787, 17538, 27294, 52147, 30659, 16812, 44178, 62683, 43995, 50843, 52457, 54683, 41623, 52915, 37024, 64664, 23683, 62958, 43680, 51698, 41090, 26876, 57320, 17101, 23765, 40371, 27611, 50867, 38830, 52124, 21385, 33947, 20892, 29598, 62443, 25260, 22490, 17087, 64408, 50611, 25555, 52883, 43758, 22746, 26297, 31951, 22200, 26265, 25838, 32401, 34276, 54671, 59361, 49544, 41875, 29329, 59802, 54675, 27884, 42468, 34493, 52977, 43253),

            "Chi" => array(30905, 43926, 38895, 60037, 37571, 35806, 24218, 53644, 48629, 28890, 62701, 17109, 62624, 28315, 41172, 52353, 23431, 22151, 54159, 31182, 48018, 19594, 41159, 38614, 38393, 38905, 58501, 26757, 38874, 64483, 19602, 33938, 21488, 60319, 20697, 19897, 25818, 22495, 28122, 45020, 23025, 26591, 26829, 24002, 34744, 54963, 56796, 19399, 29570, 18076, 55219, 27802, 27549, 55541, 36754, 35208, 56755, 28355, 30096, 17873, 20173, 56499, 29061, 57011, 29654, 63731, 29919, 57267, 46469, 19651, 54661, 33435, 18829, 36027, 55283, 63469, 52102, 22484, 42131, 51942, 52704, 17838, 47088, 28566, 30602, 54451, 63617, 60127, 49138, 29123, 43919, 54707, 33469, 44943, 19196, 32404, 23548, 55987, 55731, 27528, 56243, 25597, 52983, 30421, 27826, 27015, 42227, 31992, 22192, 16889, 63988, 18842, 21752, 65180, 32943, 54763, 18139, 59099, 32485, 33266, 30202, 46225, 62942, 41457, 22972, 34522, 37113, 34032, 56552, 17117, 20723, 32185, 30955, 64922, 52956, 59013, 28597, 47507, 34527, 33927, 31195, 25745, 24825, 33924, 48024, 60134, 19089, 17090, 36062, 30866, 49634, 57523, 51332, 28816, 57779, 35777, 58291, 50078, 58035, 27857, 17617, 28314, 29411, 56817, 46047, 56545, 22781, 47083, 21919, 35299, 31121, 34539, 19939, 21444, 30383, 16578, 28639, 46304, 25263, 35228, 34543, 53721, 19675),

            "Chong" => array(29365, 41179, 49542, 20151, 41858, 46744, 23233, 28368, 49123, 28561, 55183, 48884, 36059, 33677, 59315, 59059, 39827, 64646, 24475, 59362, 58803, 58547, 64476, 53915, 43508, 35009, 38571, 62082, 39402, 24467, 29341, 39308, 31971, 23727, 64740, 55257, 50056, 42479, 59571, 34238, 32465, 30927, 30158, 33440),

            "Chou" => array(62610, 31153, 43238, 18068, 36235, 23797, 35203, 52878, 49297, 26571, 25248, 57739, 27883, 20449, 60083, 18878, 60595, 50678, 41134, 62387, 17793, 49541, 33942, 35287, 34775, 18875, 20700, 32481, 38868, 28369, 58016, 61619, 45529, 64736, 57248, 20154, 59827, 38844, 28563, 44273, 58518, 45283, 61107, 31664, 60851, 61363, 23485, 60339, 61875, 37831, 47511, 18306, 47234, 33686, 58852, 28887, 28642, 33945, 36341, 40071, 17035, 60894, 34734, 46752, 19088, 40663, 56027, 21467, 62643, 22469, 31732, 33714, 62131, 26849, 25567, 36506, 25313, 21681, 55030),

            "Chu" => array(21718, 17872, 18651, 36297, 58270, 41163, 33675, 24258, 30932, 45274, 43667, 40698, 44185, 36760, 35015, 16785, 62416, 30171, 33155, 38837, 64232, 41652, 65203, 54001, 42627, 59805, 50839, 41396, 48025, 29419, 59893, 21242, 50920, 22748, 29593, 27821, 43495, 32146, 22744, 64153, 28034, 26040, 61666, 25016, 29693, 16821, 33789, 41432, 42676, 18820, 63923, 31695, 63667, 25542, 64691, 23241, 64179, 25048, 64947, 48091, 59276, 63155, 62899, 52201, 27133, 36056, 23192, 25026, 31460, 22714, 63411, 50065, 40857, 53390, 20111, 30922, 56562, 26057, 28378, 18915, 52128, 64435, 39316, 51080, 57236, 23449, 49379, 37333, 25242, 38340, 41908, 31955, 60919, 31465, 25223, 21979, 36556, 18877, 18348, 24748, 57986, 29664, 42420, 58524, 42164),

            "Chua" => array(18586, 24474),

            "Chuai" => array(57333, 17604, 64235, 30148, 42932, 43232, 56544),

            "Chuan" => array(23467, 52206, 16866, 44724, 25219, 44468, 27097, 63130, 59887, 18119, 62174, 21934, 30916, 16521, 47075, 17914, 33196, 43956, 44532, 30917, 38020, 43444, 56807, 43188, 45291, 44212, 63879, 50325, 16570, 36573, 20122, 43700, 27562, 55269, 63362, 46818, 30683),

            "Chuang" => array(45748, 21176, 36783, 38816, 27783, 32180, 30621, 64642, 42912, 40083, 46004, 18585, 21398, 60049, 22148, 41376, 45236, 44980, 46260, 39351, 32964, 23498, 37764, 60816, 32900, 31108, 59527, 60386, 27524),

            "Chui" => array(64406, 47028, 42888, 61402, 46992, 29166, 24032, 34178, 28134, 29684, 35513, 20197, 47284, 38087, 41705, 38909, 47540, 46516, 46772, 17652, 32915, 46057),

            "Chun" => array(21733, 35779, 48820, 42114, 48308, 28616, 48093, 51440, 33753, 49332, 22726, 50064, 20914, 47004, 24477, 20425, 63388, 50848, 38089, 37085, 48564, 54507, 33258, 49076, 27382, 40185, 25027, 64233, 50923, 33724, 59363, 52379, 25309, 39577, 34809, 19096, 24971, 20168, 47796, 18837, 32406, 43925, 48052, 60914, 60056, 38841, 29868, 34712, 40693, 25569),

            "Chuo" => array(30717, 50570, 58101, 29160, 28925, 48621, 29412, 62940, 30174, 38886, 38585, 55029, 50826, 49637, 21387, 51079, 26266, 41450, 20961, 31453, 19140, 20447, 60827, 49844, 47862, 18060, 23013, 21723, 22974, 34740, 62355, 64989, 57327, 49588, 51589, 17291),

            "Ci" => array(25050, 54004, 62708, 17054, 40390, 16624, 58251, 40074, 31224, 18123, 59525, 40326, 26819, 40854, 53405, 37871, 25843, 40410, 55796, 32468, 26078, 41971, 26074, 51636, 62700, 50356, 62600, 51380, 20142, 50868, 52208, 30123, 50612, 37346, 51124, 48514, 22463, 27102, 56031, 35022, 52660, 31181, 25021, 28377, 29360, 51892, 56470, 54657, 33179, 33991, 59030, 45718, 52916, 31147, 25494, 22472, 59521, 39110, 58254, 28804, 52404, 50100, 52148, 19189, 54669, 53217, 33021, 27339, 47858, 63964, 29171, 20917, 23802, 34255, 34952, 24058, 28638),

            "Cis" => array(61318),

            "Cong" => array(27583, 40883, 30399, 29886, 53684, 52441, 20896, 33471, 59018, 53407, 17069, 44776, 55960, 47768, 62950, 48789, 37310, 36034, 21440, 22503, 23247, 25274, 53172, 27314, 37065, 34754, 51432, 35270, 62095, 51932, 54196, 53940, 21392, 50319, 17048, 24221, 53428, 29855, 38288, 35991, 24306, 38082, 31449, 31705, 28885, 33184, 40093, 35826, 58008, 57241, 39582, 45701, 29131, 33693, 28049, 49295, 20876, 33238, 48783, 54452, 39824, 31901, 22941, 64999, 51428),

            "Cou" => array(41962, 34266, 60907, 36829, 37579, 46302, 43241, 54708, 37020),

            "Cu" => array(28379, 18832, 56210, 37059, 24965, 26085, 20682, 33498, 25563, 30170, 29147, 55220, 38319, 38545, 19413, 31919, 34043, 55476, 29119, 38382, 18890, 16860, 60917, 48885, 31228, 41461, 28039, 33531, 54964, 39600, 31627, 39931, 33019, 57057, 55732, 42978, 58345),

            "Cuan" => array(26332, 55988, 49130, 26004, 42463, 43929, 35304, 31698, 41886, 28046, 21918, 32916, 22147, 57561, 30868, 21944, 59289, 38554, 30906, 57580, 26596, 26042, 56500, 35255, 23224, 58527, 56244),

            "Cui" => array(35242, 34228, 40077, 19175, 57524, 42904, 23743, 20113, 65155, 22456, 57268, 64991, 35520, 34185, 35981, 56756, 59789, 49641, 44520, 48535, 30958, 31106, 20911, 37052, 64413, 57012, 22700, 31171, 36033, 62863, 34239, 32474, 31133, 29825, 49142, 33968, 47745, 40131, 33467, 54687, 20690, 39876, 23742, 58548, 35780, 58036, 57780, 52701, 58292, 42475, 45795, 28319, 40838, 33732),

            "Cun" => array(38555, 64641, 22916, 36498, 38879, 32952, 59060, 58865, 58804, 48261, 58082, 23259, 59316, 46237, 38537, 30395),

            "Cuo" => array(60340, 18655, 30151, 59529, 41111, 60596, 29639, 21476, 26588, 62197, 51416, 60852, 52381, 30921, 45551, 59828, 39852, 30175, 59572, 62350, 60084, 35797, 18848, 40928, 16865, 58357, 27105, 31483, 58091, 30340, 47861, 62447, 37324, 61168, 37297, 31364, 25545),

            "Da" => array(46061, 39304, 62178, 42982, 60549, 55454, 17863, 52979, 20959, 16773, 37252, 20935, 34782, 34270, 34478, 61108, 51166, 54751, 63109, 43744, 55281, 28902, 61364, 53907, 41353, 32135, 52636, 61620, 62388, 34689, 62132, 37885, 37373, 28593, 23705, 58352, 32174, 33427, 52890, 63898, 24301, 20200, 61876, 45303, 20955, 24543, 31444, 21195, 45815, 24038, 19164, 33743, 19136, 23456, 38840, 26049, 19379, 30163),

            "Dai" => array(52885, 43751, 32206, 35258, 47073, 37262, 45279, 37083, 20103, 24300, 51941, 28412, 31186, 36510, 20460, 26335, 60663, 63412, 64180, 25054, 65153, 42629, 33416, 63156, 62900, 38341, 63668, 62644, 48863, 46993, 31146, 27896, 64948, 26317, 45530, 18621, 42894, 17871, 42204, 64692, 38620, 19343, 42729, 30892, 17629, 65204, 19161, 41358, 36316, 41397, 64436, 55013, 29396, 17599, 31161, 32497, 59110, 22513, 59879, 45462, 63924, 29407, 27377),

            "Dan" => array(46977, 39874, 56553, 32391, 60659, 36305, 37088, 21381, 59881, 18401, 23435, 18158, 55769, 17584, 33978, 38810, 64147, 59780, 53635, 27868, 62961, 41177, 42421, 41909, 27786, 42165, 29436, 27900, 65259, 20147, 21377, 42677, 41653, 23428, 19354, 28354, 40112, 63472, 45237, 52445, 44469, 44213, 48522, 45702, 17860, 43701, 28038, 44981, 39814, 36251, 22683, 37006, 44725, 48534, 41696, 38099, 17583, 40653, 26579, 22702, 32248, 39665, 20912, 46983, 34288, 19436, 40153, 23280, 22198, 28295, 20949, 40631, 34803, 25735, 41957, 38799, 25234, 43957, 40593, 43445, 36284, 46224, 33922, 42933, 43189, 25841, 24033, 44937, 55955, 59114, 64928, 31184, 40365, 28075, 55965, 36495, 24316, 37316),

            "Dang" => array(45961, 33242, 28313, 21677, 62867, 51101, 36554, 22708, 35741, 45493, 24242, 17589, 25517, 28620, 38062, 32131, 51597, 22969, 51697, 43906, 36487, 35819, 17312, 22506, 54672, 33466, 21937, 59801, 43678, 38359, 60314, 51931, 33711, 46005, 34452, 23511, 21727, 54490, 42125, 22408, 39595, 46517, 46261, 53469, 46309, 25810, 18350, 39816, 20619, 45749, 32207, 39365, 47341, 39610),

            "Dao" => array(52631, 64223, 18865, 49333, 19400, 58092, 47285, 31929, 48565, 49077, 49589, 22414, 44260, 61172, 21186, 25504, 34012, 37037, 65004, 28880, 64902, 35719, 40897, 48821, 28112, 31897, 21175, 23734, 53906, 17144, 33012, 48309, 35306, 47541, 46815, 33271, 37601, 23958, 57826, 57484, 44779, 48009, 29637, 55000, 47797, 42892, 39064, 60557, 28812, 23275, 16589, 29373, 60301, 46773, 30093, 18923, 48053, 47029, 30355, 38069),

            "De" => array(48623, 49040, 60634, 40080, 54415, 37271, 31376, 49845, 50357, 50101, 64155, 30181),

            "Dei" => array(20358),

            "Dem" => array(26515),

            "Den" => array(20370, 22930),

            "Deng" => array(51381, 44522, 52149, 40601, 21203, 50613, 35815, 51893, 34784, 58349, 51637, 40073, 39109, 55521, 20971, 60399, 51125, 41972, 58080, 20440, 49035, 62623, 32440, 20397, 50869),

            "Deo" => array(22150),

            "Di" => array(26842, 55008, 52917, 50932, 40875, 57839, 52405, 40426, 54453, 28102, 53173, 30342, 57817, 47496, 19693, 17383, 26255, 38068, 46479, 56045, 39299, 29628, 38875, 31113, 45021, 18095, 40851, 31179, 46488, 38096, 49563, 53429, 17546, 52661, 23502, 43649, 44166, 53941, 36998, 23703, 45442, 40670, 47078, 56757, 25247, 33713, 53466, 56973, 34247, 55989, 36277, 44936, 56245, 26760, 56501, 30607, 55477, 48887, 22518, 16789, 28054, 27846, 25730, 39574, 19344, 23211, 19426, 54197, 34779, 21422, 33929, 43656, 40691, 22257, 22964, 34494, 38793, 40149, 28127, 17110, 21134, 20120, 22419, 17283, 17846, 55733, 57013, 64493, 22212, 18066, 35273, 32238, 30364, 25827, 29839, 33474, 22667, 29674, 41435, 44762, 28888, 57477, 32399, 55221, 45972, 34548, 38023, 19658, 46552, 35787, 18634, 17902, 19963, 54709, 32133, 54965, 26044, 25018, 60394, 31724, 26835, 53685, 26580, 46813, 25239, 40135, 58258, 24019, 47520, 60572, 50925, 34450, 33779),

            "Dia" => array(51168),

            "Dian" => array(56053, 34523, 29642, 40909, 64394, 55682, 37044, 34950, 24521, 58606, 59623, 39650, 53746, 57781, 46748, 53645, 36485, 35563, 60085, 65243, 38296, 31881, 64145, 16793, 59061, 37780, 29871, 59354, 57269, 59829, 58549, 25776, 18570, 25596, 34968, 39922, 33940, 21932, 18628, 61109, 58331, 28558, 28814, 58293, 43913, 58805, 41460, 45297, 53143, 58037, 42388, 54685, 59573, 59317, 60312, 19595, 60597, 45809, 33533, 60341, 60853, 57525, 36078, 36334, 56289),

            "Diao" => array(34703, 24964, 63465, 21480, 62965, 21981, 62133, 41711, 31701, 36563, 26556, 30136, 26796, 29133, 38583, 19951, 44175, 16540, 63214, 25339, 16633, 31202, 62645, 53492, 36331, 40673, 57483, 25573, 61621, 38908, 31162, 19957, 62710, 41205, 28153, 38116, 50572, 44673, 19640, 63157, 62901, 50137, 61877, 44249, 62618, 59634, 18611, 16853, 39599, 61365, 63413, 30682, 20618, 26290, 18660, 19192, 37786, 62389),

            "Die" => array(39832, 19600, 16774, 52708, 17389, 27029, 30909, 62449, 23749, 37550, 59870, 45710, 49808, 26068, 26586, 20713, 64181, 18638, 47851, 39584, 65205, 35482, 42716, 43488, 64693, 60635, 21901, 31942, 17106, 63925, 63669, 26512, 41362, 38790, 58513, 64949, 22466, 44272, 33984, 24003, 33233, 36549, 22493, 26780, 62441, 30107, 64984, 18328, 43917, 24053, 48022, 38034, 18639, 36342, 41975, 18152, 37863, 63734, 59541, 57077, 39381, 64437, 40366, 27894, 16815, 16603, 33457, 56218, 57073, 17071),

            "Dim" => array(50055),

            "Ding" => array(44782, 19142, 58333, 64238, 25316, 60573, 22987, 42422, 25482, 30700, 38113, 38125, 42678, 38631, 34812, 57485, 64244, 62705, 35470, 41910, 60120, 41398, 57575, 27566, 42166, 41654, 56304, 43446, 57999, 20404, 42934, 61586, 35010, 22245, 29422, 36788, 60395, 55021, 50583, 18355, 38896, 34515, 43190, 32239, 25288, 42208),

            "Diu" => array(16868, 64494, 18305, 43702),

            "Dong" => array(27541, 34297, 18682, 44470, 17398, 35580, 22734, 23541, 37513, 55691, 44982, 46006, 35285, 37066, 44726, 39609, 59034, 34759, 31894, 31686, 46305, 52191, 43958, 44214, 45547, 38018, 62107, 38328, 40589, 57482, 46320, 50312, 45494, 60891, 36593, 39659, 39124, 20611, 42908, 19652, 64671, 19114, 26832, 28861, 59268, 25529, 19698, 44784, 40343, 53229, 40082, 45238, 45750, 25741, 40842, 48353, 46262, 52203, 54148, 38541, 55531, 58257, 37854, 63107, 64158),

            "Dou" => array(49892, 38595, 50074, 18657, 48054, 48369, 30103, 23028, 50075, 22471, 47798, 40432, 23284, 22500, 25076, 17796, 24222, 30935, 24820, 24308, 19696, 54420, 19690, 23992, 53658, 27625, 64221, 50051, 64499, 36805, 41717, 46518, 19074, 29830, 29316, 19424, 48310, 47030, 22681, 47286, 51845, 48626, 24290, 47542, 37526, 55278, 26858, 25473, 48881, 46774),

            "Du" => array(33261, 37525, 29948, 39127, 18394, 19416, 41093, 32493, 51191, 28648, 25325, 51894, 22202, 32985, 46812, 50614, 51126, 62199, 18387, 50102, 49846, 50931, 43662, 28588, 50358, 49334, 48608, 59547, 48822, 49590, 64744, 47595, 16874, 24801, 34436, 18354, 24298, 33162, 48566, 49078, 29905, 43424, 40090, 55712, 31661, 40368, 45977, 62347, 27093, 39594, 19685, 22661, 31218, 21703, 20198, 51382, 32903, 50163, 38378, 48788, 53993, 42133, 26066, 27858, 21641, 52376, 35256, 31980, 35716, 51638, 35510, 53400, 38606, 50870, 39066, 17646, 17360, 48371, 33765),

            "Duan" => array(23004, 57492, 26299, 35972, 65011, 59621, 37349, 18662, 52406, 52918, 18057, 33745, 52150, 23234, 51074, 25995, 53430, 53174, 53740, 34732, 25028, 39112, 52662, 44186, 33982, 45801, 22196),

            "Dug" => array(46725),

            "Dui" => array(33988, 21406, 28119, 34279, 17111, 34705, 25814, 52616, 29154, 23178, 30622, 32158, 46467, 35832, 22766, 36583, 54198, 46723, 54454, 29108, 31151, 35976, 32918, 53686, 23433, 50573, 48017, 53942, 54509, 19172, 39101, 25547, 44525, 42636, 59119, 41194, 34020, 40332, 29109, 41453, 36074, 16798),

            "Dun" => array(63375, 57579, 24004, 29151, 20444, 44929, 55990, 56718, 48117, 61421, 58093, 55222, 18652, 38898, 49388, 56502, 23988, 38813, 62879, 30427, 21188, 26594, 48109, 39646, 56246, 55734, 54432, 56758, 20686, 54710, 55478, 43664, 64152, 38281, 54966, 51091, 36231, 38570, 56713, 59027),

            "Duo" => array(18920, 57823, 31221, 23702, 58550, 27567, 58038, 50822, 44436, 34786, 16772, 29402, 58294, 17854, 36737, 32988, 28636, 41876, 38802, 51848, 46823, 55703, 38546, 51098, 17817, 43670, 17643, 51613, 46475, 48775, 27547, 57064, 29140, 29579, 31192, 57526, 39559, 57782, 60654, 57014, 55025, 42644, 52703, 57270, 37773, 40852, 38598, 39305, 58806, 18395, 59574, 64653, 34449, 28036, 39859, 31481, 39561, 59062, 39151, 39408, 37256, 31210, 62947, 59318, 47500, 30698, 59830, 50070, 64150),

            "E" => array(65166, 29574, 49047, 41350, 34433, 60379, 35484, 33921, 36755, 32403, 47752, 24031, 20957, 62646, 24792, 57565, 24195, 19145, 25516, 52866, 25267, 54755, 61832, 53997, 18124, 35572, 46563, 44173, 19661, 28905, 19125, 34301, 16788, 39161, 34519, 63158, 29942, 50329, 25754, 33006, 31208, 31997, 37341, 43736, 36854, 55687, 30341, 44418, 63990, 35557, 51952, 33482, 31711, 51695, 22990, 39892, 27011, 42738, 18928, 37353, 24560, 16598, 18131, 44248, 61878, 61931, 61324, 40659, 52442, 30896, 40363, 44509, 27533, 57755, 43225, 37809, 60086, 25780, 60598, 45295, 26082, 29843, 60342, 61622, 35466, 36490, 55176, 29363, 19883, 39312, 58250, 60901, 60854, 57473, 35038, 60039, 61366, 50565, 19925, 32484, 63121, 62390, 50140, 57228, 30874, 17913, 62134, 22707, 61161, 46218, 21389, 53723, 16518, 19709, 49898, 18162, 62902, 32494, 23289, 35316, 38876, 20718, 61110, 23545, 18135, 47760, 26247, 47590, 21427, 37254, 38294, 65156, 31735),

            "Ei" => array(49370),

            "En" => array(47263, 22413, 62686, 60637, 63414, 34544, 50656, 17290),

            "Eng" => array(17901),

            "Eo" => array(39041),

            "Eol" => array(29569),

            "Eom" => array(60313),

            "Eos" => array(61844),

            "Er" => array(47747, 64182, 60903, 61422, 64438, 51173, 43660, 60054, 48794, 64694, 64950, 22669, 39067, 43404, 47600, 19665, 33926, 38331, 30914, 56566, 23517, 29635, 59798, 36344, 22494, 25333, 35293, 18631, 37619, 31466, 22978, 42725, 28292, 33759, 65157, 41399, 30876, 42713, 29327, 47491, 62849, 63670, 65206, 28815, 59531, 37875, 16601, 28363, 22763, 37873, 17648, 29667, 36314, 40644, 63926, 27542, 38890, 24272, 17881, 56984, 38560),

            "Fa" => array(31209, 26081, 60568, 42679, 42423, 53979, 37258, 35571, 37263, 21903, 34506, 63642, 41655, 27568, 28571, 41911, 42935, 49389, 43191, 31461, 40606, 36083, 43447, 57729, 29899, 60290, 60566, 42167, 22706, 21953, 20673, 30689, 28076),

            "Fan" => array(47287, 61338, 46519, 35246, 47799, 47543, 45806, 47031, 46775, 30942, 17042, 39887, 30951, 49374, 23733, 44471, 35834, 41601, 46263, 43703, 36051, 36828, 20190, 45751, 32414, 53643, 61322, 44215, 25583, 30959, 23031, 41145, 52107, 17593, 18097, 62440, 40152, 18397, 19101, 35311, 35055, 46323, 27018, 44950, 27030, 19333, 29852, 28603, 45239, 45953, 46007, 29893, 37769, 52363, 43959, 62356, 62868, 58756, 59791, 60832, 42721, 37534, 35985, 30661, 44983, 17081, 56556, 51441, 45495, 32961, 23469, 40127, 22731, 34756, 63383, 18052, 60661, 62872, 43423, 41367, 30142, 44727, 18308, 17378),

            "Fang" => array(22677, 49847, 56801, 50359, 20629, 46068, 34035, 19194, 39412, 19668, 60308, 26289, 36226, 40109, 48567, 45216, 54766, 17820, 48311, 48055, 50615, 52952, 64218, 55944, 37850, 49591, 49079, 48823, 49335, 26872, 23522, 28901, 53494, 50103, 20635, 34038, 34027, 39927),

            "Fei" => array(62192, 20936, 53388, 22703, 53487, 54677, 51606, 35461, 17328, 53687, 62689, 53431, 53175, 52919, 26773, 28290, 38140, 31876, 39655, 28881, 35562, 51693, 16825, 37363, 17853, 25539, 51639, 61676, 24044, 52663, 46745, 49372, 43239, 19097, 35018, 20382, 64654, 28862, 29137, 62963, 21930, 44534, 61174, 22514, 18929, 23536, 59884, 50871, 30703, 51127, 64229, 51383, 62346, 46055, 25756, 62602, 25074, 29164, 17910, 44515, 52407, 52151, 25795, 46060, 37527, 30165, 33994, 58612, 48361, 18070, 20362, 39829, 51895, 31215, 59627, 51172, 20174),

            "Fen" => array(64488, 30460, 25266, 56247, 34504, 55735, 27535, 57015, 27830, 56503, 21244, 25992, 56759, 19934, 33473, 35836, 63479, 27608, 65183, 40585, 27593, 29400, 23706, 51161, 58781, 35463, 17137, 22251, 20465, 35265, 28898, 54199, 28124, 45463, 33771, 17046, 25224, 36336, 27120, 35516, 30416, 35982, 54455, 54967, 55223, 53943, 27320, 54711, 21397, 55479, 32138, 21436, 63478, 45029, 36804, 24202, 57527, 26243, 36241, 25079, 43757, 29335, 35990, 55991, 27073, 24525, 38292, 38884, 24781, 57271, 39668, 52110),

            "Feng" => array(19452, 24753, 57993, 28911, 60343, 25324, 37350, 51360, 38558, 29900, 47250, 60087, 28863, 60855, 21462, 61367, 33477, 60599, 63880, 21745, 40595, 16826, 52635, 59575, 21464, 59063, 20100, 55261, 52453, 57783, 19332, 42881, 20728, 59319, 32394, 58339, 20356, 58295, 27129, 58039, 20184, 26794, 38368, 32197, 33455, 26779, 61111, 41149, 20967, 28557, 29827, 21699, 19695, 35033, 47835, 43650, 48540, 26542, 27128, 59831, 20887, 53406, 21420, 24244, 42381, 22732, 27847, 39820, 19704, 58551, 21210, 58807, 49133, 27801, 39068, 26852, 30111, 37279),

            "Fenwa" => array(40621),

            "Fiao" => array(34258),

            "Fo" => array(42625, 30088, 61623, 33431, 38529),

            "Fou" => array(58526, 48883, 41352, 24006, 32956, 36288, 24056, 36032, 33003, 30346, 23504, 61879),

            "Fu" => array(58086, 47032, 59370, 22914, 47800, 44472, 32136, 49336, 31949, 54167, 40676, 30454, 29343, 34769, 49903, 21985, 18353, 19611, 20406, 25528, 48568, 20112, 43192, 38078, 48095, 25293, 47233, 36298, 47544, 27854, 43448, 31157, 48530, 26770, 25280, 34771, 21645, 36502, 20701, 22261, 38282, 24767, 36831, 46264, 43704, 62450, 30937, 58846, 37848, 19936, 25556, 46008, 64495, 34002, 34789, 45752, 64502, 39141, 36569, 58755, 38352, 49080, 48824, 45240, 40161, 55959, 48770, 46230, 33514, 28042, 62135, 60052, 29870, 29611, 58074, 47086, 44763, 62172, 60397, 56990, 39579, 64951, 50165, 57052, 36488, 38076, 64183, 49558, 33517, 18936, 19884, 19103, 41656, 64439, 39868, 49802, 36289, 62952, 60377, 41400, 62358, 25222, 22727, 47288, 46834, 46045, 42727, 35483, 19132, 40955, 22520, 16892, 18172, 51857, 37577, 30660, 62391, 23481, 25058, 50933, 39613, 32480, 26328, 62903, 21633, 34958, 61428, 16525, 62085, 46991, 19425, 65207, 63415, 48604, 63159, 60633, 64695, 42424, 27054, 60547, 56038, 24452, 37343, 51933, 30453, 19666, 40623, 60141, 46520, 26361, 27090, 27597, 18677, 17351, 28637, 17622, 44984, 28589, 38877, 17547, 27075, 48351, 52623, 48056, 25483, 59108, 62647, 48312, 25515, 33009, 38861, 44728, 42680, 42936, 32143, 20915, 45496, 43960, 46776, 29176, 38333, 39355, 41912, 32965, 56818, 26356, 63671, 33736, 19137, 37580, 34234, 18400, 42168, 63927, 28349, 44439, 21219, 24962, 26861, 32209, 34233, 42465, 47773, 57747, 61682, 19127, 30160, 24219, 46565, 22243, 20463, 17656, 23790, 24711),

            "Fui" => array(26538),

            "Ga" => array(55526, 28133, 42201, 22187, 49592, 49848, 55782, 36833, 52958, 28916, 47338, 51423, 35036, 50670, 20871),

            "Gad" => array(26798),

            "Gai" => array(33966, 31893, 51128, 41354, 22925, 17607, 57578, 35765, 23014, 50360, 44778, 42200, 43411, 50616, 51384, 30665, 41624, 41880, 22489, 25816, 37844, 23453, 24281, 32226, 58255, 30653, 50104, 50872, 31149, 29078, 63364, 63620, 24449, 62171, 56555, 16608, 60378, 25834, 60545, 37320),

            "Gan" => array(31966, 17637, 52865, 52152, 61061, 20694, 37012, 18834, 51896, 58767, 51640, 23723, 29057, 17370, 19160, 18637, 21690, 49051, 20934, 18146, 61411, 29658, 53432, 37558, 53225, 42719, 26871, 41207, 38330, 17337, 21911, 37296, 40065, 30452, 53688, 29392, 53944, 53176, 47850, 22961, 26521, 28568, 54926, 54200, 19930, 33263, 47262, 24563, 27860, 42215, 47085, 30966, 35202, 63363, 17341, 50916, 49292, 63460, 57840, 64500, 35003, 30849, 52664, 52408, 49036, 52920, 57819, 20868, 54748, 28089, 20216, 53214, 48268, 27805),

            "Gang" => array(55736, 27882, 55992, 54712, 18402, 53148, 54456, 41152, 54664, 59779, 63884, 47342, 32927, 55224, 54968, 58002, 19891, 18863, 16622, 33412, 65265, 45472, 55480, 37016, 57587, 22206, 57233, 49824, 19636, 37824, 56977, 29670, 37860, 45293, 65160, 40599, 56248, 56504, 63704, 59552),

            "Gao" => array(25535, 48094, 52357, 21145, 59064, 37017, 32998, 45208, 57528, 39883, 48858, 25045, 34532, 44251, 57016, 19126, 45461, 34485, 34741, 45039, 27833, 57784, 28609, 62876, 49385, 33450, 61405, 58552, 48029, 57272, 30640, 31731, 22213, 47832, 50820, 58296, 58040, 28912, 45721, 48618, 56760, 37063, 31373, 36534, 36604, 31469, 27642, 36858, 63881, 58808, 22711, 34986, 33432, 51687, 49897),

            "Ge" => array(62392, 61368, 61880, 52624, 36038, 39572, 35558, 40440, 26582, 21140, 23237, 53125, 64900, 30947, 39570, 27603, 30697, 62955, 34456, 54255, 37356, 49399, 27629, 41451, 65262, 23761, 50423, 30925, 62648, 50144, 59548, 43740, 61624, 59832, 19950, 18883, 57745, 45984, 60856, 39906, 47008, 64742, 40948, 56961, 65158, 61144, 21383, 60088, 59296, 55771, 30396, 34295, 61596, 59576, 37007, 60305, 30953, 28152, 34230, 22998, 19858, 52209, 60600, 59320, 60344, 34516, 41714, 61112, 30712, 30189, 38852, 30649, 62904, 53741, 46322, 29923, 25830, 17145, 27881, 39082, 27125, 63416, 32898, 43455, 63160, 27622, 41113, 29685, 21229, 20702, 46324, 49627, 28330, 23282, 50053),

            "Gei" => array(28605, 63672),

            "Gen" => array(41693, 24211, 27283, 57076, 63928, 43224, 64184, 59359),

            "Geng" => array(60639, 41401, 31117, 35065, 25277, 60808, 65208, 33665, 20960, 29657, 57846, 27123, 34549, 41913, 25543, 41657, 27118, 43666, 51867, 32193, 30126, 64440, 64952, 27268, 40085, 24976, 64696, 63890, 17632, 16584, 37054, 19391, 55778, 26363, 25533, 54423, 35231),

            "Geo" => array(51591),

            "Geu" => array(44934),

            "Gib" => array(54918),

            "Go" => array(61830),

            "Gong" => array(31900, 21988, 29884, 34036, 57222, 45966, 36861, 35581, 50142, 44729, 45241, 31187, 38387, 41462, 28892, 17285, 25268, 31110, 36242, 38360, 34753, 17809, 52127, 52210, 45497, 45753, 60822, 61159, 23773, 38636, 58256, 44985, 42425, 43449, 27580, 50667, 42681, 39557, 56287, 42169, 44473, 43961, 44217, 29334, 43193, 16517, 25225, 48370, 43705, 28044, 42937),

            "Gongfen" => array(49283),

            "Gongli" => array(50563),

            "Gou" => array(21954, 30856, 28109, 56296, 30936, 47545, 53747, 16605, 47322, 30379, 49811, 31480, 23035, 21698, 22210, 45292, 46777, 55939, 50662, 24532, 62089, 59781, 48057, 27539, 36825, 19923, 47289, 42378, 39366, 47801, 36308, 46265, 19701, 65240, 46521, 60906, 23954, 56549, 26603, 47033, 35736, 46495, 55170, 46009, 29851, 40378, 62707, 47351, 40400, 30957, 47329, 37073, 24197, 26850, 50151, 24291, 38846, 46832),

            "Gu" => array(22449, 44526, 19920, 52409, 27550, 24057, 19900, 22967, 18576, 21439, 23499, 64491, 19102, 27632, 52665, 36789, 39831, 38576, 62448, 39350, 63210, 62696, 52153, 62339, 55432, 36237, 50401, 51897, 48524, 61314, 56558, 39046, 64667, 50873, 39363, 17887, 27841, 26509, 51641, 62698, 51129, 47598, 30413, 49391, 37602, 32920, 50361, 35324, 50648, 49392, 41200, 24466, 60304, 33439, 37299, 25300, 25240, 48631, 17089, 46064, 26502, 26246, 48790, 61417, 39608, 48569, 65013, 19677, 30153, 49650, 54493, 32155, 49593, 48119, 51385, 58758, 48516, 42137, 49337, 48825, 26804, 49849, 44528, 50105, 55430, 57311, 19933, 53995, 33478, 57481, 50617, 22778, 59875, 44250, 25829, 27779, 61942, 16886, 39406, 40669, 33272, 36322, 51679, 45548, 65268, 48313, 49081, 34745, 20377, 23029, 18618, 45707, 23257, 40429),

            "Gua" => array(29064, 18369, 23741, 19649, 53177, 53945, 54488, 46298, 54201, 40916, 40424, 31963, 38115, 19078, 59880, 18054, 41173, 53689, 60562, 20378, 48112, 52921, 42886, 45215, 28634, 40068, 20207, 41150, 21732, 45957, 36484, 54915, 28146, 22511, 36600, 53433),

            "Guai" => array(58078, 57567, 34951, 51862, 54713, 54457, 41366, 63625, 54969, 43141, 29584),

            "Guan" => array(36781, 24761, 56505, 34013, 28847, 26540, 24275, 25335, 56761, 28613, 24037, 44954, 20353, 57785, 27269, 16888, 24304, 18908, 35574, 20714, 35794, 50393, 22728, 55993, 55737, 55481, 56249, 55225, 18121, 20947, 19434, 42231, 18608, 36271, 16824, 30441, 35995, 41360, 22779, 32247, 59112, 34280, 57017, 26037, 55792, 57497, 64923, 19193, 21404, 23998, 55185, 59121, 47325, 65162, 38322, 33696, 41104, 37045, 21649, 40664, 51940, 57273, 59614, 42387, 33437, 29163, 39654, 57529, 38336, 49902, 27615, 49304, 53725),

            "Guang" => array(45723, 34731, 17567, 39622, 55275, 29107, 24541, 23171, 44426, 36744, 48030, 58041, 61313, 54174, 54942, 54686, 41187, 22012, 53651, 20933, 58553, 60132, 33502, 38290, 34778, 21890, 21445, 58297, 62873, 55950, 61153, 17835, 22159, 21908),

            "Gui" => array(33965, 52633, 27636, 46053, 61594, 53730, 60601, 28658, 26868, 29173, 28338, 38141, 24718, 30618, 59009, 53464, 60302, 60857, 33717, 20869, 34972, 53482, 35292, 61369, 31722, 61113, 37512, 47498, 27024, 22957, 45976, 60345, 38854, 41614, 38315, 30593, 30403, 42992, 40671, 59321, 59833, 41958, 60089, 59065, 59577, 39095, 31977, 45459, 55798, 48779, 45720, 20878, 42379, 18144, 36562, 20433, 33419, 52119, 58809, 35533, 28115, 16527, 30443, 62426, 30131, 60899, 37277, 32189, 24470, 23287, 22509, 27127, 60904, 39630, 18864, 40088, 60149, 24824, 27852, 65215, 21637, 53720, 24568, 16526, 30105, 19648, 64501, 25306, 37338, 44279, 24274, 61881, 20885, 49642, 35732, 61625, 62393, 35476, 56280, 37253, 36564, 65267, 27343, 62649, 52887, 19385, 44440, 51859, 31410, 22454, 39321, 27834, 42372, 41860, 50332, 18137, 32201, 62137, 23218, 50841),

            "Gun" => array(62905, 59382, 20725, 33245, 40382, 34460, 34293, 63417, 36822, 26029, 20402, 39601, 57069, 40087, 38608, 63161, 43152, 62169, 18122, 19429, 46567, 49135, 27070, 19613, 29393, 32969),

            "Guo" => array(63623, 20164, 62343, 65248, 61063, 60295, 48526, 61831, 64185, 48619, 29636, 58841, 22735, 25290, 33730, 40339, 22685, 18833, 58760, 50913, 60311, 63729, 64441, 43398, 50143, 63195, 63929, 30178, 63673, 58269, 58866, 33253, 39055, 18567, 33161, 34479, 40079, 41954, 17092, 30108, 24287, 64953, 19176, 60896, 43920, 63961, 58098, 39140, 48879, 36530, 21232, 41368, 30929, 42217, 40944, 31709, 33230, 64697, 58610, 23486, 16572, 37319),

            "Ha" => array(59806, 29390, 21121, 28554, 21898, 62136, 65209, 46050),

            "Hai" => array(32991, 36592, 44935, 47547, 22510, 42226, 45301, 41914, 20895, 26761, 22241, 41402, 41658, 54495, 62853, 52192, 42426, 42938, 58246, 39407, 38129, 39921, 42170, 42682),

            "Hal" => array(24961),

            "Han" => array(43422, 24764, 46749, 21162, 56219, 32405, 46266, 29895, 34965, 54749, 18604, 47290, 65179, 47034, 46522, 45498, 28397, 30692, 19406, 51355, 45242, 47546, 47802, 24564, 18378, 36529, 65154, 30190, 26862, 37326, 45754, 16882, 39894, 23546, 27596, 44005, 28395, 46010, 46778, 65246, 22001, 42482, 38093, 26781, 19662, 25828, 18916, 57247, 49813, 37536, 31152, 31212, 18673, 43450, 39918, 57239, 16885, 62938, 38279, 24986, 65015, 36572, 17880, 27362, 49394, 25478, 25273, 54510, 63385, 43403, 51357, 43194, 44218, 52099, 25495, 53226, 38797, 52874, 44474, 51948, 23982, 43962, 45709, 44730, 27014, 63111, 43706, 21226, 44986, 56291, 20931, 21636),

            "Hang" => array(44263, 40072, 48314, 58260, 60643, 22461, 34526, 37304, 22201, 48570, 39128, 25037, 37599, 64911, 26310, 60648, 61927, 29578, 48058, 36084),

            "Hao" => array(38607, 29143, 50106, 17595, 48826, 49850, 49082, 43493, 28086, 26768, 34960, 50874, 21382, 55445, 48106, 24981, 50618, 31914, 58336, 46814, 24267, 37574, 42214, 37589, 50362, 26086, 37095, 29575, 49338, 24455, 50912, 46999, 26808, 49594, 40835, 31938, 45285, 38894, 44018, 34992, 16843, 33526, 44702, 35221, 18370, 38860, 31456, 34224, 31428, 17052, 56194, 43504, 33456, 60293, 38604, 32944, 29387, 48277, 46485, 59804),

            "Haoke" => array(49539),

            "He" => array(56198, 23199, 21209, 47260, 54970, 54714, 31116, 49311, 17844, 35999, 39165, 34770, 40953, 23549, 18669, 18666, 36784, 23016, 36560, 55482, 34440, 55226, 25067, 20986, 40431, 19450, 24797, 64489, 49030, 54416, 24052, 31190, 41181, 53987, 48864, 26268, 26092, 26016, 24480, 18096, 26348, 21499, 21952, 39118, 39047, 26604, 55003, 18147, 54202, 16864, 36746, 52666, 62597, 20621, 44438, 53946, 39664, 59380, 16817, 17322, 49371, 52922, 30098, 17050, 51130, 44506, 48606, 51386, 22740, 53178, 52410, 39631, 49376, 22918, 29883, 23252, 59031, 38843, 45712, 49906, 34557, 32984, 53690, 48285, 19386, 40443, 27131, 55523, 49055, 38804, 19912, 49646, 51642, 41094, 31388, 17073, 51898, 53434, 52154, 54458),

            "Hei" => array(55994, 55738, 23804, 53131, 42653),

            "Hem" => array(56707),

            "Hen" => array(35975, 38380, 35796, 57018, 56506, 56762, 58497, 56250, 35730),

            "Heng" => array(37624, 58042, 19865, 57786, 17401, 17066, 25083, 64904, 21992, 49118, 60121, 60059, 37008, 57274, 29891, 34499, 57530, 44170, 61086, 58298),

            "Heui" => array(54919),

            "Ho" => array(22913),

            "Hol" => array(25217),

            "Hong" => array(40385, 37821, 25321, 17624, 17338, 30434, 28899, 32413, 36332, 36539, 31667, 28610, 35521, 34748, 39100, 16856, 34760, 26340, 29624, 59578, 35016, 58585, 38889, 38377, 50331, 47517, 23796, 57996, 25486, 52101, 26838, 46493, 53395, 39416, 40939, 38123, 44766, 23292, 31637, 31721, 36819, 42970, 39567, 39048, 19846, 59322, 18136, 34227, 37853, 43911, 39809, 23262, 40421, 28831, 33436, 49054, 46981, 31941, 39085, 58554, 58810, 17811, 40924, 59066, 60346, 45278, 31174, 25003, 64739, 48266, 59834, 27530, 26296, 26252, 42717, 60090, 60602, 51427, 19355, 50821, 32960, 22955),

            "Hou" => array(25591, 17376, 62394, 36343, 60064, 61882, 23798, 55286, 61626, 62138, 24536, 26352, 24821, 43484, 27360, 57825, 38299, 52197, 35720, 61114, 43918, 61370, 60858, 19197, 16870, 19138, 35272, 16563, 55284, 49143, 18114, 62451, 37091, 64240, 21682),

            "Hu" => array(38073, 52969, 51696, 64954, 38644, 21450, 39374, 26047, 27600, 64442, 24765, 43490, 65210, 34707, 44533, 63930, 63418, 52972, 64919, 20615, 38649, 64231, 19656, 41915, 45284, 38348, 18333, 42427, 22006, 29925, 41659, 21147, 32926, 25328, 19686, 45804, 17908, 31734, 23425, 17402, 31883, 26606, 64698, 28048, 32454, 32411, 63381, 50156, 62953, 45539, 64735, 20357, 21909, 63162, 41882, 64663, 44938, 30095, 62906, 18821, 32392, 62650, 44786, 22684, 36812, 64186, 16558, 41403, 61920, 63674, 54921, 48262, 22431, 64245, 38870, 35524, 18055, 36075, 41180, 35980, 61412, 22682, 50318, 27115, 55433, 62609, 37613, 24557, 29687, 18939, 28388, 40951, 28631, 28346, 22008, 36837, 43399, 55280, 61841, 52444, 21958, 17333, 28357, 21460, 31699, 21695, 20116, 38317, 46235, 34808, 33463, 17310, 55967, 61329, 42171, 60035, 21446, 20373, 36750, 45793, 64729, 62865, 62097, 37014, 43928, 42939, 59116, 42683, 61410, 40125, 23195, 59628, 64412, 33504, 44427, 44171, 64906, 34747, 61420, 52211, 25802),

            "Hua" => array(38613, 48523, 58776, 45469, 65007, 35475, 40324, 22780, 44691, 42392, 44004, 26327, 53917, 17890, 58840, 35481, 37588, 47597, 28869, 17856, 29644, 22412, 40106, 17634, 60392, 41866, 43451, 43707, 59622, 16840, 27091, 44219, 64750, 26316, 27621, 46472, 24518, 43195, 20107, 51607, 27349, 16828, 37811, 22407, 43963, 45243, 44475, 33174, 44731, 34445, 20363, 37806, 50059, 35758, 44987, 34554, 38094, 19629, 59283, 40150, 37362, 26343, 31178),

            "Huai" => array(56705, 23943, 45280, 46267, 44945, 30878, 27330, 45499, 37329, 40145, 55285, 30924, 53649, 46011, 45755, 31948, 50313, 46523, 45705),

            "Huan" => array(53648, 46221, 48059, 20883, 28572, 48827, 54757, 61598, 49595, 48315, 26775, 48612, 49339, 48774, 61924, 24754, 25846, 23286, 16780, 21456, 58603, 62855, 26851, 36085, 37067, 63386, 49083, 32428, 34991, 44184, 28594, 42975, 59894, 43167, 23194, 17095, 47291, 41444, 24717, 47035, 43227, 20680, 51421, 36029, 30401, 26347, 32396, 57992, 20467, 37591, 46779, 63129, 22217, 63456, 42472, 63963, 25336, 42129, 26522, 36568, 46562, 51335, 41184, 32216, 52463, 47803, 27613, 30606, 36785, 57335, 37549, 36798, 27540, 19082, 49851, 19395, 48347, 50107, 48571, 18408, 26797, 28632, 55783, 55197, 25066, 48869, 17638, 18921, 21470, 22762, 20928, 23996, 29179),

            "Huang" => array(28832, 50619, 28150, 25330, 30183, 22007, 35578, 53435, 21904, 35821, 64758, 22486, 27575, 51131, 51643, 43251, 25584, 38629, 60062, 29324, 50819, 36016, 26070, 60060, 28312, 33200, 52629, 47775, 34260, 29589, 52923, 20106, 53691, 59792, 53179, 42481, 51387, 21500, 62170, 52155, 50875, 50566, 26763, 61576, 46466, 51899, 49643, 30862, 50363, 22992, 17801, 19862, 41613, 58849, 17129, 36266, 40841, 60575, 44008, 35525, 62195, 35244, 52667, 20115, 52411, 53988, 36808, 21144, 55525, 30694, 28095),

            "Hui" => array(57275, 59365, 58043, 18685, 41965, 31632, 57019, 57531, 49383, 39361, 37788, 56763, 18941, 47584, 58811, 63196, 26071, 56507, 21408, 28057, 55995, 43930, 57740, 58299, 56543, 59067, 30875, 58555, 57787, 24554, 21125, 35997, 42462, 40600, 49557, 56251, 32145, 33415, 55951, 17611, 19926, 17355, 24493, 17049, 39850, 37772, 18568, 55739, 62364, 42906, 65173, 41359, 41615, 37076, 22233, 24010, 25813, 37039, 18311, 24963, 29941, 41165, 18079, 62951, 52714, 34000, 37275, 46066, 23000, 61066, 40853, 62103, 54459, 39617, 24203, 23955, 54203, 37522, 27035, 24799, 26349, 41349, 16543, 34019, 56215, 39071, 46810, 54971, 48798, 53947, 59549, 37023, 29100, 28560, 42980, 27279, 26767, 55483, 59783, 61148, 37598, 55227, 31437, 24751, 17631, 22989, 57223, 39414, 35793, 27271, 20146, 47502, 39093, 40148, 30343, 54931, 54715, 24734, 58103, 30941, 17858, 24558, 50403, 16524, 40679, 21738, 27111, 43651, 30188, 32237, 41454, 62957, 25241, 19657, 30679, 19927, 40174, 23200, 39371, 24506, 26541, 20674, 42119, 25840, 17600, 46067, 44697, 52881, 30903, 32434),

            "Hun" => array(27551, 58340, 63888, 28627, 48090, 40917, 37762, 58514, 60603, 50663, 23455, 19914, 18315, 33518, 31127, 29374, 45980, 25777, 41372, 34750, 25072, 23426, 51088, 54499, 38295, 35226, 40392, 63387, 16637, 59579, 28823, 26005, 59323, 59835, 17842, 47248, 20976, 50914, 36031, 18142, 19122, 60347, 60091, 37609, 63887),

            "Huo" => array(62395, 28651, 34994, 60384, 60655, 44444, 26326, 24458, 24265, 16555, 28062, 38791, 62651, 40117, 23728, 23532, 23272, 25323, 30152, 22458, 40628, 57836, 29428, 46835, 40901, 60309, 18373, 37298, 26818, 64660, 55534, 33974, 32994, 29853, 47074, 62139, 60859, 33206, 61115, 60401, 49647, 30949, 49029, 43999, 58753, 25842, 28307, 23451, 61074, 39135, 63163, 61371, 39896, 61627, 35460, 22761, 27010, 64645, 62907, 61883, 28337),

            "Hwa" => array(65161),

            "Hweong" => array(27359),

            "I" => array(21889),

            "Ji" => array(28569, 42977, 18642, 64157, 40327, 55799, 18392, 39891, 21936, 54673, 24207, 32183, 24508, 21196, 19904, 59882, 21757, 18681, 19155, 33231, 22977, 35737, 30125, 25078, 38107, 17867, 36543, 41712, 29615, 52867, 50364, 17610, 16574, 48060, 18667, 17883, 24529, 38856, 21957, 64404, 42478, 39833, 28055, 49852, 49807, 44944, 49340, 26524, 32905, 50620, 33493, 63462, 47253, 56822, 60150, 48572, 23991, 52373, 43396, 44022, 54773, 51929, 20637, 57332, 21661, 18870, 18645, 25271, 18871, 23999, 60137, 19081, 44988, 36345, 38556, 46524, 60048, 45711, 24279, 44777, 27866, 20376, 25038, 18903, 63895, 25759, 17368, 34797, 44220, 44010, 35047, 34800, 52412, 44476, 35545, 22525, 37249, 16891, 35282, 25281, 35026, 22504, 23277, 20956, 24240, 25082, 22269, 32460, 45244, 25025, 49794, 30187, 23986, 17563, 43505, 46012, 42203, 43708, 21494, 26306, 19443, 29175, 28364, 24256, 34462, 17655, 31436, 17399, 39926, 22252, 22013, 48005, 30128, 17834, 45500, 50675, 35260, 26323, 45756, 22163, 41098, 44933, 46268, 46780, 62937, 43964, 48600, 30085, 17120, 42457, 40949, 38618, 43668, 44510, 25051, 48273, 17581, 21245, 30673, 22425, 28404, 21746, 35988, 43196, 63931, 31983, 51187, 49286, 45965, 18892, 40160, 64239, 22404, 48605, 43418, 24451, 28358, 19448, 65211, 33507, 56216, 50323, 23687, 54005, 40374, 43452, 21945, 63466, 43406, 58858, 28891, 64443, 59014, 56964, 64955, 60645, 63899, 28106, 40121, 42225, 60051, 43742, 46303, 37868, 26075, 37021, 20110, 25538, 41688, 42428, 63419, 27844, 39651, 31962, 18886, 47242, 41660, 61071, 53983, 56204, 34966, 42684, 33999, 41916, 42940, 62431, 57048, 46829, 47324, 64187, 63675, 23172, 49368, 57831, 41404, 28411, 50422, 25033, 56551, 64699, 27855, 28087, 17556, 55443, 59109, 40847, 51132, 50876, 64148, 34804, 58615, 47548, 47036, 45554, 35739, 57822, 33527, 54753, 43754, 55182, 49084, 52668, 43492, 51388, 41698, 25485, 50108, 28604, 34948, 35795, 35014, 34184, 58079, 48316, 51644, 52156, 27272, 49628, 25030, 48828, 49596, 51900, 58528, 27274, 62611, 23019, 23269, 26039, 35252, 29626, 49134, 35480, 33727, 21430, 24237, 30172, 32217, 29651, 33726, 46316, 54491, 42172, 17305, 41617, 26567, 30361, 26076, 28410, 22522, 20716, 31979, 32235, 19841, 47804, 47292, 26599, 21982, 35805, 36558, 59293, 20946, 35035, 44732, 40389, 35301, 33212, 27112, 50073, 42714, 43148, 46554, 37843, 33524, 22973, 61661),

            "Jia" => array(22481, 28586, 59357, 51957, 24772, 35302, 37883, 23944, 21394, 34520, 27352, 60802, 26083, 52924, 20412, 51104, 49908, 32402, 30363, 51429, 53180, 53692, 31378, 54204, 53436, 16778, 24460, 47514, 42212, 27543, 54771, 24514, 46561, 59632, 53659, 60647, 44680, 53948, 51953, 41947, 23704, 38552, 65008, 30873, 56727, 53396, 54972, 55484, 21643, 52111, 56252, 56764, 55996, 31729, 39153, 60553, 29315, 27544, 56508, 55740, 57020, 46990, 53140, 52971, 36291, 62190, 59025, 52466, 43498, 30407, 54460, 20704, 27526, 41709, 54716, 37069, 18425, 55228, 44421, 30635, 38136, 25070, 20443, 26084, 24046, 64659, 55535, 21230, 41458, 47863, 44752, 61583, 46738, 64746, 55262, 24979),

            "Jialun" => array(60806),

            "Jian" => array(34490, 58519, 31660, 58812, 60092, 26601, 34248, 21170, 33480, 63198, 25304, 35030, 53919, 32190, 31434, 38858, 55704, 31673, 62429, 52455, 20416, 39604, 20401, 17588, 63978, 57788, 54414, 58044, 57276, 58556, 27819, 61315, 59836, 42986, 43652, 43908, 56821, 23524, 32486, 29669, 59324, 59580, 24024, 18376, 54756, 49125, 32946, 41120, 58300, 23722, 42890, 42634, 59068, 57532, 48528, 54408, 58614, 23288, 60860, 54504, 31706, 30423, 31995, 32210, 31628, 31739, 40694, 23533, 55431, 35303, 39399, 29588, 28608, 65212, 62360, 35538, 43197, 41917, 42173, 55195, 21995, 24545, 30656, 31227, 64444, 16777, 22459, 23034, 37022, 30971, 17606, 19437, 19185, 26096, 37604, 29430, 53232, 23193, 59039, 23994, 22207, 24795, 34299, 35998, 28921, 53913, 40602, 33270, 29911, 38351, 22227, 46583, 26782, 40183, 40346, 19893, 17396, 30386, 37832, 58868, 17043, 61588, 47589, 63932, 23493, 32899, 30425, 42473, 56026, 20695, 51863, 29170, 60563, 25340, 22757, 57218, 29065, 30155, 65170, 31385, 17892, 41346, 17128, 25235, 63128, 26345, 42731, 42685, 21431, 53489, 25317, 25812, 27388, 32997, 61628, 50664, 28828, 35811, 64237, 61372, 62396, 31457, 46575, 60651, 55770, 38031, 60561, 45034, 32957, 62140, 36751, 38888, 43413, 33452, 25017, 17822, 19922, 23006, 25064, 40645, 40642, 18364, 23271, 25320, 31720, 25475, 39810, 64956, 60348, 33768, 34974, 41151, 31666, 49381, 24034, 21744, 18390, 18918, 36276, 38580, 37273, 21150, 22420, 18406, 37077, 45970, 61884, 33484, 61683, 19170, 17851, 24778, 24793, 61674, 42382, 38812, 49909, 60604, 26519, 61152, 20434, 63676, 42884, 42628, 42121, 48797, 51443, 62908, 62652, 54489, 64700, 25837, 32488, 25496, 24011, 61116, 41661, 41405, 34692, 59286, 36996, 34219, 27522, 42941, 51674, 51599, 22242, 64188, 18897, 42429, 63164),

            "Jiang" => array(44772, 46525, 35215, 18641, 29846, 41612, 44519, 46013, 31677, 30422, 36590, 18309, 57737, 30863, 56820, 30177, 30404, 47769, 16586, 17545, 35471, 28385, 21692, 49299, 46269, 16541, 55949, 61930, 38574, 39126, 34254, 31645, 40641, 44169, 39311, 24217, 19403, 55015, 45203, 30664, 44477, 43965, 43709, 64732, 61681, 63732, 31662, 44221, 39322, 43453, 44989, 57220, 22666, 18167, 45245, 45501, 45757, 22986, 23690, 43672, 58605, 40878, 39671, 44733, 20672, 23789, 33962, 20943),

            "Jiao" => array(29120, 34708, 43934, 21239, 53437, 35539, 52925, 53181, 40084, 38327, 33963, 48609, 39826, 54149, 26319, 56725, 25773, 52413, 51645, 48276, 59617, 47764, 17331, 35248, 49341, 19415, 25081, 59539, 22739, 46219, 63883, 46325, 36818, 29573, 38302, 39378, 58500, 37040, 34529, 25544, 26355, 62104, 30666, 55187, 52358, 41185, 18140, 24535, 18910, 53908, 23965, 21895, 64390, 62108, 24285, 52669, 56800, 35531, 35546, 38826, 53387, 65165, 35229, 53693, 44949, 51595, 62861, 30865, 57078, 54745, 27536, 54514, 54261, 46781, 63391, 54512, 35514, 29903, 40952, 28661, 35268, 47293, 28855, 56205, 32159, 39878, 48829, 48317, 45030, 49085, 48573, 27277, 64220, 35729, 33411, 46300, 47549, 43412, 19654, 48061, 47805, 47037, 17118, 17038, 21177, 26557, 52157, 53476, 40175, 50621, 50397, 49853, 47339, 32999, 21379, 29155, 24027, 25987, 24025, 43420, 38047, 24516, 50109, 49597, 28092, 43248, 44761, 55518, 21701, 52121, 40178, 34042, 36090, 50877, 51133, 60574, 35768, 47506, 30613, 51901, 51389),

            "Jie" => array(22224, 16565, 22926, 20454, 20372, 24309, 40399, 24206, 58301, 21652, 39119, 24035, 28056, 55789, 55485, 37332, 45722, 40397, 57277, 38345, 28117, 25819, 51700, 36253, 56054, 53646, 53152, 64392, 62615, 28844, 51343, 48114, 60349, 59581, 34192, 36557, 24021, 36304, 33683, 34694, 21696, 58813, 39889, 36852, 31952, 22195, 20097, 59837, 62604, 30617, 37103, 58045, 28371, 26091, 57486, 58557, 59325, 30382, 60093, 25771, 60605, 59069, 50060, 25739, 40387, 19895, 36076, 26318, 44703, 54973, 53949, 47255, 40092, 63635, 22704, 56806, 55997, 26244, 28037, 57562, 26045, 39417, 37259, 28043, 54461, 31973, 54205, 47757, 40377, 55229, 56560, 35781, 63378, 16875, 46560, 60040, 40391, 54717, 24239, 35542, 51183, 44768, 19409, 56450, 32139, 20366, 56765, 48358, 39821, 55543, 52109, 20632, 61340, 44443, 26500, 57021, 18584, 52610, 33997, 49796, 56509, 32199, 28548, 19861, 55741, 61068, 30672, 17327, 38878, 61160, 16791, 57789, 35970, 57533),

            "Jin" => array(46465, 19935, 57834, 63933, 35253, 42399, 50076, 64445, 31891, 33676, 50919, 65213, 64189, 50564, 41446, 34710, 17026, 63677, 41662, 45956, 30869, 41406, 41949, 48027, 64701, 33241, 24992, 28333, 31947, 63645, 57995, 20691, 17364, 17114, 32496, 34045, 33414, 48521, 40583, 17028, 22170, 29059, 37548, 23441, 37018, 61162, 20159, 58525, 58592, 36227, 33673, 44688, 19911, 50929, 23731, 62141, 36577, 25299, 45704, 64648, 28332, 20908, 36540, 33707, 61629, 48003, 30180, 64138, 47087, 56468, 17096, 23010, 60861, 50414, 61373, 61885, 24305, 61117, 64397, 22429, 19889, 56290, 42635, 62909, 28606, 37833, 23781, 38102, 43752, 51433, 52194, 63421, 36741, 62397, 63165, 21756, 30459, 23725, 57818, 33934, 18563, 40647, 49373, 62653, 34232, 64957, 52619, 24005, 18365),

            "Jing" => array(63379, 46014, 51093, 41105, 47294, 18336, 24749, 33976, 20127, 42742, 64898, 45282, 23213, 17837, 45502, 45246, 57237, 36279, 49899, 19095, 54233, 49550, 22235, 26069, 45758, 19438, 48611, 28396, 33487, 29880, 47038, 47806, 48527, 34447, 35458, 62595, 40926, 42113, 60122, 47846, 33002, 32151, 63626, 29924, 47550, 30904, 21223, 46270, 33464, 48062, 25775, 28298, 62181, 46782, 55019, 33987, 47003, 23682, 51685, 44990, 29060, 59115, 37814, 42686, 44222, 42174, 39869, 33946, 42942, 18587, 57330, 60564, 21418, 48349, 21949, 36296, 43966, 41212, 36859, 16627, 53737, 44734, 38907, 33529, 32505, 22937, 32962, 43198, 22777, 19702, 58611, 43710, 47852, 27016, 58842, 27784, 31118, 65251, 27116, 55768, 26504, 46526, 18331, 28652, 25484, 18927, 26094, 44478, 43454, 18375, 41091, 42430, 56475, 28615, 28140, 63882, 17566, 41918, 28854, 32443, 35457),

            "Jiong" => array(21635, 45213, 32227, 38353, 41375, 31214, 58015, 17824, 22476, 50405, 21452, 59372, 55171, 58759, 54659, 29576, 40893, 37617, 51615, 46984, 30438, 20157, 28657, 23966, 59352, 27788, 29595, 19359, 64401, 41119, 18415, 48574, 54171, 61659, 48318, 17282, 39902),

            "Jiu" => array(61940, 65176, 45040, 27324, 48830, 23752, 23443, 18168, 45536, 16787, 52963, 35519, 21687, 53735, 39571, 25527, 38788, 19585, 62340, 49086, 63730, 44192, 24726, 49342, 22417, 51646, 52414, 28590, 52926, 52630, 51902, 38042, 50878, 20201, 33773, 17797, 30594, 60136, 55001, 18319, 18575, 47762, 52158, 17029, 51134, 51390, 52670, 64910, 37308, 53736, 50622, 25332, 50110, 37114, 22657, 56823, 49854, 52632, 26309, 54768, 36347, 22917, 24705, 28413, 17307, 50366, 49598, 27077, 25994, 30614),

            "Jou" => array(58265),

            "Ju" => array(54462, 39042, 21728, 49562, 57231, 25531, 31688, 45458, 29361, 62368, 22959, 53950, 56253, 64388, 18588, 48862, 65164, 51872, 54206, 42652, 21128, 50842, 53694, 24800, 18564, 48023, 26783, 24243, 54718, 19151, 53438, 47323, 53182, 32504, 62196, 58589, 22218, 53213, 46839, 29882, 41178, 30961, 54769, 49910, 16846, 47343, 34773, 32427, 31972, 26587, 35321, 38084, 23008, 30176, 59530, 34459, 27610, 36842, 18818, 56202, 19083, 34701, 41704, 35269, 19396, 42985, 62619, 54974, 58590, 30871, 17601, 28552, 57534, 63722, 17115, 34281, 30428, 56766, 55486, 28372, 41186, 44012, 60560, 49393, 56254, 35468, 58046, 55785, 39116, 26072, 58814, 53128, 31450, 53998, 55998, 32950, 42130, 47081, 24505, 47767, 17552, 50905, 24770, 27085, 49032, 35259, 59326, 60636, 57987, 26777, 30193, 54668, 33952, 19688, 36836, 57829, 40956, 16893, 19896, 19955, 54929, 38586, 23279, 35800, 19932, 46837, 55230, 27791, 18426, 56989, 59524, 61669, 40667, 22265, 41348, 20981, 40433, 55742, 29177, 57790, 42897, 65171, 24268, 45449, 25998, 35319, 22773, 21651, 58302, 63628, 40330, 40379, 27290, 65167, 56217, 35778, 31442, 58558, 39881, 63461, 59070, 26053, 57022, 18580, 43738, 22729, 46326, 39647, 24029, 57845, 26568, 21211, 23189, 57278, 45289, 34706, 52889, 50396, 56510, 26109, 44699, 26755),

            "Juan" => array(64749, 20178, 36070, 30397, 21704, 28132, 54511, 59012, 34287, 42122, 60094, 39338, 26513, 23745, 17392, 24266, 59582, 47332, 33213, 17330, 26859, 30911, 59838, 36803, 23249, 18881, 37553, 61672, 52356, 48008, 45968, 50159, 23959, 64647, 54418, 31447, 39623, 38596, 19350, 27373, 33679, 59890, 28123, 18058, 60350, 40932, 23967, 17348, 45448, 43159, 17326, 64411, 64225, 32912, 60606, 40423, 48004, 45787, 20217, 50158, 49654, 61118, 29898, 63971, 56197, 39310, 40172, 60862),

            "Jue" => array(31631, 37352, 23027, 40114, 27356, 40144, 20143, 43486, 39871, 27378, 40882, 22733, 44422, 38079, 51425, 51092, 62142, 65177, 36824, 17613, 63678, 46071, 62910, 62398, 63208, 32922, 51928, 57474, 24253, 32445, 26338, 18911, 18922, 55267, 43912, 56035, 41193, 17876, 48627, 34743, 22445, 57062, 63166, 23940, 56474, 18572, 31873, 61374, 55776, 56979, 54924, 55436, 63422, 28629, 58855, 41618, 20403, 22765, 23173, 27563, 27051, 61886, 30858, 20891, 24774, 35227, 58328, 49554, 58351, 33235, 30112, 40108, 40591, 62654, 16537, 56721, 20969, 57324, 40862, 35577, 17116, 18647, 29135, 51163, 36839, 28879, 32487, 61630, 40333, 20651, 38289, 17550, 60057, 34250, 34973, 37792, 45538, 35759, 27121, 56538, 54249, 33018, 55455, 35217, 58848, 39421, 42974),

            "Jun" => array(64446, 27807, 35813, 41407, 35548, 42175, 52613, 36603, 31477, 32234, 35579, 29127, 39624, 38883, 64702, 41442, 31459, 40914, 44424, 37111, 19099, 44682, 63934, 58871, 64958, 33488, 35257, 22009, 26772, 21453, 65214, 39088, 17906, 20985, 21655, 58609, 64190, 30946, 16820, 24036, 62084, 57075, 18078, 21241, 42431, 40688, 38832, 24991, 62367, 36782, 17068, 41663, 32917, 44689, 19440, 38028, 31107, 33977, 17614, 56542),

            "Ka" => array(24528, 39560, 42687, 42943, 51167, 60805, 43199, 20945, 52459, 64472, 27875),

            "Kai" => array(25318, 44735, 20612, 63726, 56541, 20105, 25053, 44223, 61584, 24042, 64994, 43967, 19338, 43711, 46319, 24553, 61147, 44479, 39143, 45205, 31462, 16538, 19928, 56292, 62703, 44942, 53636, 63376, 64926, 59874, 25071, 18410, 52638, 53150),

            "Kal" => array(26241),

            "Kan" => array(22475, 22512, 36317, 45789, 46271, 19866, 31965, 25737, 42896, 51592, 40413, 33774, 32909, 31625, 25296, 21214, 33720, 45186, 43229, 45503, 59629, 56726, 44991, 63420, 45247, 44685, 43481, 46015, 45759, 37117, 44266, 44014, 31924, 51675, 22674, 39346),

            "Kang" => array(58247, 18565, 38291, 47551, 47807, 48063, 24809, 33506, 55022, 47295, 51939, 24551, 56461, 41611, 46527, 21683, 46783, 28573, 31708, 47039, 24247, 45464, 19447),

            "Kao" => array(23711, 40859, 48831, 48575, 48319, 53133, 60910, 64490, 30709, 37365, 49087, 35575, 17636, 36500, 57576, 16513, 60133, 35027, 32243),

            "Ke" => array(39105, 21907, 51391, 51135, 20622, 51647, 43156, 56478, 46049, 19637, 49655, 51864, 50623, 20683, 42990, 50367, 30702, 26337, 62194, 51903, 21490, 46315, 52415, 60646, 30596, 50308, 41443, 52671, 52100, 48359, 32152, 41356, 52927, 53640, 28373, 32446, 52159, 55952, 21172, 50314, 36578, 39072, 59111, 50879, 28099, 49855, 49599, 33459, 40122, 21432, 49343, 24755, 61673, 25800, 22237, 51616, 48625, 31407, 50111, 58096, 37082, 56814, 55696, 49549),

            "Keg" => array(25985),

            "Kem" => array(35023),

            "Ken" => array(53439, 25560, 53951, 53695, 23747, 32472, 43145, 52465, 31185, 62866, 43409, 28645, 18371, 53183, 27901, 30643, 37035, 62427, 41197, 47350, 65009),

            "Keng" => array(38117, 19684, 28339, 44690, 54207, 48800, 16531, 33203, 39347, 21973, 18663, 44271, 48787, 25480, 51949, 41114, 65260, 54463, 46212),

            "Keo" => array(31886),

            "Keol" => array(26497),

            "Keop" => array(37342),

            "Keos" => array(31622),

            "Keum" => array(40581),

            "Ki" => array(23952),

            "Kong" => array(30684, 40115, 41872, 61339, 60915, 18917, 55231, 31225, 55487, 40428, 54975, 51169, 50649, 54719, 31425, 24204, 48791, 47089, 49800),

            "Kos" => array(22415),

            "Kou" => array(64997, 16610, 56511, 58243, 56255, 38036, 40587, 29836, 43674, 46559, 26314, 40375, 16797, 25850, 28858, 55539, 41694, 55743, 48260, 38630, 27832, 53980, 61165, 55999, 26546, 47251, 37775, 39812),

            "Ku" => array(44007, 60558, 22146, 28917, 29622, 16554, 57535, 58047, 40401, 48375, 49031, 36826, 57791, 35247, 26301, 58303, 18129, 47072, 56024, 41183, 18578, 38071, 57279, 31643, 56767, 19635, 40154, 64903, 57023, 42460, 63126),

            "Kua" => array(58815, 36846, 37603, 59583, 17798, 59327, 26611, 59071, 18133, 30357, 58559, 32453),

            "Kuai" => array(60095, 36599, 32387, 19337, 37257, 42715, 60607, 59839, 60351, 38112, 63201, 56043, 63380, 35274, 20872, 22004, 57053, 57816, 63891, 37572, 23484, 25847, 21380, 22671),

            "Kuan" => array(17818, 61119, 21688, 60863, 31219, 19610, 30696, 37516, 34956, 50679),

            "Kuang" => array(29105, 62143, 28083, 62655, 24509, 56554, 63167, 62911, 19673, 17549, 29339, 62399, 28821, 49033, 22197, 59285, 33719, 27584, 27624, 51089, 23036, 27619, 29156, 38880, 65254, 16861, 21693, 44187, 25232, 61631, 28345, 17877, 64399, 20101, 61375, 56283, 49540, 45786, 40415, 18653, 53727, 23801, 20181, 50654, 38787, 63450, 23442, 40156, 51345, 61887, 61344, 49114, 37596),

            "Kui" => array(27316, 47756, 37851, 17306, 41664, 41920, 40941, 46307, 29829, 59353, 41408, 30094, 27100, 36255, 30668, 52725, 29159, 16827, 39106, 35002, 33264, 24296, 19430, 38381, 29424, 38298, 41629, 31889, 61939, 63985, 59032, 37314, 50571, 32972, 26766, 20202, 40396, 64703, 30101, 27616, 54245, 20920, 36290, 63423, 42996, 27780, 63935, 64191, 42723, 38637, 63679, 61938, 64959, 24814, 30667, 47320, 40677, 62871, 40089, 62359, 44512, 64447, 61918, 59537, 53994),

            "Kun" => array(52707, 42688, 55177, 36021, 37043, 42979, 16890, 18678, 17349, 31737, 37302, 20466, 55707, 38833, 18625, 17134, 61430, 42944, 36329, 55945, 40886, 39357, 33001, 22737, 19150, 35725, 35469, 24234, 21713, 27295, 56456, 53896, 42432, 42176, 44021, 33429, 64487, 36295, 33489, 33523, 58271, 16557, 33949, 35059, 45452, 26833, 54775, 25851),

            "Kuo" => array(16877, 20126, 28909, 40937, 21741, 21664, 38643, 18668, 45713, 43456, 18839, 43200, 34962, 35232, 21486, 20921, 43712, 28807, 30408, 43968, 54002),

            "Kweok" => array(27063),

            "La" => array(41439, 38275, 50311, 35019, 44736, 56792, 48284, 61335, 22931, 45248, 29364, 22675, 45760, 44182, 44480, 37057, 35271, 47594, 58853, 31123, 63728, 44992, 40655, 24566, 19177, 28392, 17133, 23984, 22932, 30455, 34477, 51865, 45504, 26846, 24782, 31950, 27284, 18164, 17605, 28064, 44224, 51181),

            "Lai" => array(23483, 29650, 53393, 34957, 36321, 17612, 42484, 29678, 44785, 31902, 33182, 62455, 16523, 26498, 60801, 46272, 62094, 31874, 49633, 38533, 23520, 46564, 58081, 28142, 46016, 29625, 34777, 50831, 23468, 22713, 18143, 28389, 34199, 34041, 17654, 44695, 43759, 20978, 27865, 21192, 65252, 46528, 63981, 16818, 18684, 35718, 23196, 23466, 58346),

            "Lan" => array(64395, 23507, 34964, 31936, 35488, 60569, 18316, 45193, 60900, 44521, 50112, 48622, 23009, 18324, 17875, 49600, 63115, 23439, 45200, 17391, 49088, 63711, 37535, 20099, 27037, 35740, 57058, 26812, 26272, 46985, 16800, 32928, 34976, 45214, 35501, 50368, 49856, 46572, 47808, 35715, 56561, 48576, 48785, 19616, 29613, 16618, 59375, 23506, 38277, 48832, 47552, 45281, 48320, 49635, 47296, 47040, 46784, 48064, 40904, 47501, 26834, 31691, 60825, 36567, 24507, 45470, 30674, 17879, 24540, 32978, 49344, 51099, 26093, 38120, 31976, 26293, 56199, 55961, 16571, 39326, 37278, 54158, 29332, 25024, 28108, 52372),

            "Lang" => array(19669, 33257, 21654, 52160, 45192, 62941, 47256, 23170, 53656, 54517, 40643, 23942, 32134, 32397, 47581, 34761, 51136, 51392, 20375, 30409, 50624, 17562, 20448, 16626, 33766, 39084, 23268, 51648, 51588, 50880, 39307, 51904, 38032, 33971, 64751, 29148, 42464, 27017, 21151, 19094, 46831, 53219, 34245, 18656, 39373, 24249, 60402),

            "Lao" => array(60294, 60657, 54208, 54464, 53952, 27325, 36753, 32476, 19678, 45794, 26562, 20889, 42206, 45981, 43659, 39395, 22659, 43503, 60656, 63373, 36497, 35764, 16816, 21910, 55940, 53403, 47748, 52672, 50835, 52928, 36791, 49377, 23430, 30197, 52416, 57832, 24720, 53696, 39339, 31411, 63384, 36045, 61166, 19334, 53440, 45813, 28623, 36026, 34023, 37358, 53184, 33011, 38075),

            "Le" => array(52161, 53216, 60826, 25322, 60632, 61155, 17904, 54976, 57487, 47071, 27059, 22443, 31674, 35309, 39158, 39920, 54720, 21400, 47000, 42743),

            "Lei" => array(57536, 18844, 59035, 57792, 45443, 61668, 56256, 35048, 57280, 20731, 42139, 25236, 29132, 26816, 25014, 55007, 34997, 39619, 37102, 19439, 19694, 33251, 23534, 57024, 41140, 18405, 43765, 31405, 56297, 26856, 52617, 21169, 23518, 23020, 34252, 30655, 32192, 61337, 28151, 17640, 55232, 41161, 40128, 64217, 28352, 42905, 29388, 39598, 53478, 50072, 53479, 18173, 40837, 20144, 35275, 48777, 56512, 31959, 42649, 36274, 31692, 40143, 39070, 22709, 22453, 55744, 17289, 29885, 56768, 46042, 59377, 61826, 55488, 33204, 30154, 56000, 17365),

            "Lem" => array(58499),

            "Leng" => array(19147, 18356, 41142, 58304, 58048, 29661, 58560, 43228, 40113, 46819, 55688, 37506),

            "Li" => array(34195, 43254, 64656, 22409, 51445, 47854, 41409, 61060, 18382, 33229, 57572, 22473, 37765, 46997, 29594, 38828, 17912, 18110, 45814, 39063, 22499, 21705, 43739, 62912, 38800, 56214, 61334, 64481, 58267, 55946, 53653, 20659, 57328, 36294, 62400, 63209, 23770, 34475, 49901, 53236, 41921, 27341, 50162, 64131, 64704, 54003, 20652, 30646, 63936, 45277, 42720, 40848, 19339, 36229, 29342, 25338, 17121, 38395, 53639, 22236, 33684, 24757, 23472, 23477, 22705, 25532, 41167, 43907, 24030, 59033, 44165, 32941, 56808, 26304, 28059, 59102, 25580, 30199, 24286, 33239, 35220, 38573, 23276, 35245, 29600, 40179, 24811, 41603, 58773, 27040, 43673, 38324, 20400, 24555, 63219, 29944, 24462, 33433, 55456, 32974, 31917, 46489, 23221, 40651, 49305, 37115, 27028, 51337, 35791, 23990, 38834, 31680, 45959, 30362, 22430, 18620, 54176, 54170, 40913, 33508, 59584, 58102, 33496, 31672, 56306, 61917, 52198, 22156, 19633, 42945, 59840, 29375, 23783, 49556, 20726, 28904, 52871, 30457, 38133, 48350, 40164, 48878, 23503, 33494, 44423, 29409, 33733, 24212, 21487, 28550, 32979, 34785, 43909, 26574, 24196, 58816, 60096, 43756, 59072, 41630, 31620, 60352, 22215, 62144, 60608, 39044, 58862, 16562, 51943, 23993, 49136, 49312, 32407, 37776, 59328, 38855, 34967, 44256, 42654, 27594, 62656, 41665, 56972, 24214, 63168, 63680, 64448, 63424, 64192, 45047, 47093, 35551, 27639, 42689, 61593, 62439, 49119, 30711, 27803, 56816, 42433, 46041, 65216, 21662, 49384, 31180, 57051, 49884, 64960, 58860, 64652, 32463, 42177, 61888, 23291, 32503, 53398, 61120, 46553, 61376, 26811, 34999, 18384, 48115, 17292, 25487, 26600, 36597, 25229, 45188, 39611, 44783, 26065, 60864, 22993, 34788, 22966, 41701, 43201, 52965, 61632, 45798, 51611, 29069),

            "Lia" => array(31362),

            "Lian" => array(24780, 24524, 33985, 47041, 33172, 52123, 46529, 46785, 44774, 39136, 39108, 46017, 63207, 45761, 25787, 41619, 40344, 49044, 54667, 64733, 18861, 59369, 58504, 44270, 34718, 40166, 39578, 28406, 55697, 41708, 24251, 32448, 54429, 39614, 46273, 27336, 18679, 29835, 18819, 44265, 57308, 62180, 34220, 17548, 29831, 51100, 36809, 22673, 44737, 48267, 21893, 51359, 36248, 22149, 41092, 40146, 50910, 63110, 38646, 36481, 52721, 43713, 34455, 17119, 43969, 44225, 45505, 44993, 45249, 31377, 22922, 28340, 35798, 41452, 37826, 21152, 24806, 44481, 18676, 41191, 24791, 47603, 40890, 47513, 39643, 58358, 61341, 42469, 40657, 36802, 35790, 32959, 20427, 37570, 18882, 36546),

            "Liang" => array(49345, 46236, 49857, 49601, 48833, 51334, 36821, 30196, 39131, 59381, 31205, 43457, 46239, 26589, 30429, 49089, 51587, 25566, 47297, 48065, 44764, 63131, 47809, 52215, 31930, 48321, 47553, 18622, 41961, 60306, 42118, 28625, 28350, 50584, 31878, 22478, 23228, 18817, 35037, 48577),

            "Liao" => array(51694, 36346, 26351, 37345, 28143, 32992, 29344, 37593, 36571, 18904, 33511, 29683, 19075, 44684, 53185, 52417, 29874, 22991, 53918, 45964, 21225, 51905, 52702, 17127, 30368, 40879, 48011, 52929, 30877, 48357, 63885, 37521, 64141, 51393, 50625, 18396, 51649, 50881, 50369, 56032, 18665, 27588, 50113, 27793, 55180, 46740, 52673, 23695, 33722, 27087, 40383, 22712, 54256, 22189, 31967, 51137, 33476, 54503, 50581, 20152),

            "Lie" => array(17323, 38392, 62452, 31630, 26869, 55968, 59535, 46468, 19872, 18314, 32450, 20980, 57591, 61941, 22255, 26765, 45706, 46216, 41956, 38086, 50052, 64985, 54209, 53441, 41874, 40881, 47258, 39134, 40594, 25770, 53697, 34755, 44447, 32205, 24710, 54465, 63707, 18847, 48283, 53953),

            "Lin" => array(57281, 56769, 29840, 57025, 34704, 44177, 17053, 54419, 17284, 55451, 24473, 50589, 56809, 61429, 24798, 27612, 23772, 57537, 45697, 27267, 17397, 17372, 16844, 65245, 21977, 61592, 22190, 40622, 35561, 27039, 19650, 36832, 54516, 16564, 29359, 20459, 55265, 57573, 36778, 43933, 37307, 54721, 55745, 56001, 54977, 39813, 31361, 38805, 56513, 34189, 56724, 33721, 27879, 35486, 51593, 20446, 51605, 38386, 18632, 23543, 60407, 35835, 56257, 42474, 64415, 21933, 55489, 55233, 21189, 39615),

            "Ling" => array(26877, 60662, 28664, 40683, 21920, 39403, 30715, 40427, 31985, 25534, 58561, 24556, 33694, 17354, 37355, 39370, 52893, 58305, 39396, 61121, 18926, 60609, 34768, 29930, 22670, 60865, 29161, 58014, 51935, 37629, 39419, 26621, 26828, 63627, 20214, 53401, 33249, 35744, 62617, 24812, 47579, 59073, 45802, 57793, 17814, 24725, 59585, 29616, 58817, 28344, 31670, 26547, 63392, 63203, 31624, 62176, 59841, 25476, 36834, 59273, 46735, 18573, 60353, 38538, 60097, 56040, 26064, 37557, 58049, 31429, 63217, 26324, 24571, 27601, 35017, 17373, 39642, 57844, 51442, 59329, 21148, 60042, 37517, 59538, 63976, 20396, 45543, 16573, 41144),

            "Liu" => array(37294, 35291, 54000, 26505, 62145, 62603, 37569, 16783, 47261, 31412, 17047, 39154, 52886, 23489, 24273, 30714, 30699, 22266, 27380, 17388, 61377, 63425, 58772, 32939, 20631, 45028, 29102, 55020, 62913, 26267, 47335, 46063, 36324, 20633, 63681, 21441, 56991, 62657, 24254, 59796, 61633, 63937, 34801, 55023, 61889, 26036, 62182, 62401, 21731, 63459, 28155, 63169, 38572, 27119, 17795, 34550, 35500, 30447, 48364, 52621, 41604, 61848, 23981, 52470, 39115, 26526, 31206, 29680, 35067, 37354, 25839, 52113, 44679, 57061, 16560, 40110, 29671, 31940, 29641, 24009, 40177, 52697, 29938, 34955),

            "Liwa" => array(19886, 18094),

            "Lo" => array(56967),

            "Long" => array(38090, 35069, 32945, 23738, 65217, 46471, 43761, 25269, 25230, 61077, 22166, 51609, 20204, 25804, 22173, 31646, 24974, 63132, 59367, 51947, 64961, 28600, 28565, 35837, 32901, 53480, 64449, 41410, 50157, 61923, 61581, 64705, 55260, 64193, 44188, 39320, 22759, 50825, 28308, 50569, 24043, 41922, 42371, 24504, 22935, 25013, 38066, 19674, 56463, 35507, 27088, 58075, 41666, 18128, 18640, 16579, 23739, 29906, 36349, 36605, 19672, 21755, 42178, 18419, 30952, 23516, 34733, 21894, 31392),

            "Lou" => array(54175, 26257, 61425, 29939, 63474, 42946, 53473, 51096, 22253, 50167, 36054, 42434, 18831, 20175, 38085, 32220, 43458, 30345, 57997, 52620, 43714, 48796, 21991, 40111, 64752, 52975, 39855, 46816, 58506, 21917, 42899, 29663, 21166, 43202, 26050, 42690, 27570, 17543),

            "Lu" => array(31172, 32970, 48834, 39908, 26853, 47810, 22753, 32986, 27355, 42218, 29907, 46530, 56196, 52162, 19121, 48066, 37813, 27365, 26284, 18098, 39094, 42643, 62948, 33465, 19599, 28297, 21721, 47042, 40123, 56286, 49602, 50626, 50882, 50114, 49858, 43755, 49090, 49346, 50370, 51650, 30398, 25748, 46743, 62430, 51394, 51138, 51906, 52418, 39162, 33228, 36315, 16862, 19186, 39098, 22174, 64755, 18127, 39672, 55536, 36538, 26087, 33778, 21947, 46274, 25593, 38842, 18934, 46312, 28409, 34989, 18117, 37554, 22203, 41951, 41863, 48793, 29856, 44226, 23956, 29376, 40640, 17135, 31475, 31991, 21243, 31464, 24542, 16838, 17104, 57568, 46786, 44738, 43970, 34018, 54518, 38900, 46215, 44482, 46580, 61929, 31173, 46576, 21419, 52715, 49289, 18347, 39830, 19148, 58587, 62179, 28052, 54248, 23951, 44994, 30204, 28574, 26286, 48578, 62593, 30344, 20616, 30184, 39877, 38118, 16582, 40167, 41103, 48322, 52196, 29875, 35527, 47554, 20380, 18332, 22157, 45506, 47298, 57738, 55962, 52868, 38092, 46018, 28553, 40393, 49821, 50328, 38067, 30203, 41106, 45762, 43417, 51090, 45250, 38132, 18077, 31668, 58863, 23198, 61331, 55017),

            "Luan" => array(42142, 59545, 53186, 21715, 25537, 19653, 46238, 19336, 19909, 52674, 52930, 18169, 19080, 24970, 23692, 51190, 53442, 61416, 61589, 48624, 31105, 18635, 23547, 26544, 53698, 53954, 39905, 30337, 28302, 26288, 35276, 36584),

            "Lue" => array(54210, 17591, 45807, 34990, 18312, 36555, 30948, 54466, 29668, 34180, 40076),

            "Lun" => array(55234, 36330, 34996, 19958, 34525, 27099, 18126, 38838, 25282, 37845, 55490, 54172, 49288, 56258, 19380, 16580, 36994, 63367, 54978, 63105, 56002, 17803, 37005, 35735, 37575, 42384, 37261, 55746, 61664, 54722, 57490),

            "Luo" => array(27323, 40954, 58777, 35295, 36072, 38128, 49369, 29572, 40946, 32204, 34290, 56770, 56815, 58050, 57794, 24513, 41190, 31433, 23251, 44163, 57538, 29660, 64478, 58562, 19129, 59074, 52896, 50166, 54162, 46482, 31424, 59330, 58818, 18885, 42993, 21700, 31636, 61333, 21133, 63715, 26032, 58306, 64988, 42210, 43654, 54151, 25326, 57835, 57026, 56514, 57282, 41449, 29088),

            "Lv" => array(33992, 18366, 33975, 44941, 29879, 16594, 46569, 38531, 31935, 27808, 29416, 27013, 18675, 33513, 34495, 52451, 39097, 60804, 23953, 34696, 28567, 26271, 32437, 63983, 18562, 60565, 52869, 31226, 22756, 34237, 19680, 56049, 28612, 63211, 45209, 26097, 33739, 53900),

            "M" => array(56965),

            "Ma" => array(27829, 59871, 49128, 61122, 21993, 34806, 25012, 39886, 35814, 27130, 32129, 29080, 61634, 19444, 57734, 38060, 61378, 21685, 35057, 20359, 19378, 44428, 19894, 21185, 55426, 26826, 57227, 63221, 55014, 59842, 29103, 59586, 20220, 18828, 60381, 34802, 57847, 45195, 35979, 60610, 21233, 53408, 30634, 60354, 54428, 60098, 41459, 22479, 60866, 61409),

            "Mai" => array(16876, 63170, 62658, 32195, 62402, 30169, 24016, 60036, 32479, 16620, 58591, 61890, 42205, 18905, 62146, 26827, 40187, 22663, 31690, 53121, 62914, 48603, 54153, 38138),

            "Man" => array(33725, 39818, 34016, 41411, 44252, 41099, 64962, 41953, 19331, 64706, 65010, 19869, 23250, 23759, 38578, 65218, 33706, 21711, 31423, 39382, 20199, 28876, 56559, 55709, 16842, 53223, 64450, 55276, 53149, 64194, 40678, 63682, 46232, 63426, 28082, 46739, 24721, 43506, 38126, 36496, 38065, 46327, 63938, 21968, 52364, 31472, 41206, 47772, 43511, 19956, 20212),

            "Mang" => array(52205, 18914, 39656, 26543, 41923, 22406, 49307, 19370, 32996, 48544, 49546, 19707, 40902, 42947, 19916, 35000, 56457, 56804, 33735, 37327, 65266, 41201, 47493, 29691, 23217, 44960, 64747, 43998, 32144, 42435, 28078, 63706, 60814, 28310, 42179, 34181, 46220, 30870, 41667, 42691, 64410),

            "Mangmi" => array(62852),

            "Mao" => array(46019, 45507, 26545, 41963, 62425, 30091, 37330, 45251, 28848, 20953, 18105, 35785, 44483, 55427, 25798, 44995, 25550, 22508, 44781, 36576, 29384, 54660, 50410, 17857, 45763, 42734, 55440, 31968, 42901, 64407, 41960, 51866, 48026, 53379, 47340, 43459, 62442, 32412, 39644, 59784, 18145, 34218, 35222, 30691, 45273, 43203, 43971, 35032, 44227, 55026, 43715, 63889, 61065, 47585, 50139, 58076, 46733, 44739, 54147, 37107, 64242, 35006, 24293, 39673, 45555, 55031),

            "Mas" => array(30854),

            "Me" => array(23216, 43655, 20620, 46275, 41351, 20894, 48263, 56206),

            "Mei" => array(35211, 48835, 17056, 22246, 31452, 33948, 51851, 44441, 48356, 49091, 45210, 29180, 61827, 49347, 23179, 26108, 44946, 45453, 31925, 54684, 21426, 41631, 27117, 51447, 31892, 28366, 40889, 28148, 39898, 51185, 49603, 31634, 29873, 50371, 25519, 49859, 50115, 29321, 35523, 17324, 47043, 44765, 17146, 62856, 55524, 53985, 48579, 31427, 48323, 23963, 53381, 61082, 59867, 48067, 46787, 53142, 32966, 46531, 36508, 25824, 47555, 23012, 52464, 53743, 44514, 23526, 27340, 30100, 33458, 47299, 56207, 17097, 36504, 36017, 19864, 47593, 47811, 20676, 29612, 17334),

            "Men" => array(49041, 18080, 47509, 40592, 52204, 50883, 27307, 17040, 58599, 33666, 51139, 45037, 21737, 35532, 52718, 26283, 51351, 53726, 23017, 50627, 24759, 31717, 60387, 53394, 36993, 38599, 19117),

            "Meng" => array(52675, 37771, 49883, 18606, 40942, 51651, 49140, 52419, 37621, 30716, 37810, 22764, 36848, 53187, 47249, 62857, 17644, 27383, 48374, 43246, 52931, 59117, 27109, 60658, 47091, 20982, 33020, 48116, 49891, 24520, 51395, 62601, 51612, 35307, 52163, 28103, 40171, 35250, 64146, 18156, 17044, 46578, 63965, 57731, 47761, 52366, 36739, 17067, 55706, 58517, 38624, 64920, 51907, 28874, 31694, 37344, 63389),

            "Meo" => array(24539),

            "Mi" => array(29580, 31413, 20873, 24973, 55258, 55491, 37842, 20636, 56515, 56771, 37586, 42910, 40419, 46734, 21962, 24270, 61597, 34206, 59619, 59892, 41690, 17036, 56003, 62365, 24001, 44932, 32954, 38809, 27606, 22164, 29129, 36552, 18619, 26344, 59876, 31435, 51342, 17565, 26013, 35249, 24984, 55264, 51103, 23242, 50840, 59267, 34556, 56259, 39634, 55747, 47763, 17300, 39823, 32156, 27094, 54211, 58359, 53955, 23478, 59383, 34555, 39380, 28617, 46306, 23474, 62188, 54979, 57219, 56295, 16833, 54723, 43234, 16849, 54467, 19115, 53699, 57323, 62693, 31154, 49880, 25793, 38139, 53443, 34235, 32433, 52724, 42651, 55235, 61825, 36013, 49886, 32148, 56209, 34464, 35041, 21481, 33505, 19195, 36249, 33761),

            "Mian" => array(37566, 31989, 29420, 61419, 30920, 53904, 53220, 58819, 48006, 42202, 40911, 50660, 31943, 64995, 50845, 18940, 17852, 41211, 16636, 19964, 59075, 53892, 58762, 57795, 29932, 33470, 61067, 25790, 45797, 57283, 57539, 20678, 27019, 57027, 34457, 26062, 59107, 41369, 58307, 60909, 49538, 58563, 62362, 58051, 36018, 35506, 37042, 17537),

            "Miao" => array(20907, 60867, 58341, 60099, 61123, 44687, 34492, 39102, 59378, 21135, 63630, 27576, 18106, 50672, 59331, 25227, 49127, 59587, 59843, 46987, 63455, 37369, 60355, 46573, 60611, 49896, 61677, 24055),

            "Mie" => array(50650, 64243, 30129, 26270, 47859, 30967, 24784, 59292, 24454, 58335, 47237, 49112, 61635, 38098, 18891, 61379, 52369, 32147, 53134),

            "Miliklanm" => array(40877),

            "Min" => array(63171, 41365, 31404, 23724, 22956, 53138, 30895, 17332, 29688, 41188, 33497, 36066, 35213, 18113, 47841, 37770, 33928, 61891, 60303, 18069, 25009, 60391, 58844, 18325, 18150, 62403, 39069, 34746, 37265, 20369, 28547, 43767, 39670, 23985, 21171, 56709, 25244, 32233, 45204, 62147, 51683, 25220, 60803, 51076, 62915, 26857, 18873, 40120, 62659, 19392),

            "Ming" => array(63634, 20984, 63683, 37347, 27032, 54506, 19411, 57985, 64707, 39636, 42229, 17553, 64643, 30122, 45450, 63939, 28896, 63427, 64451, 45979, 25265, 64195, 34225, 19606, 63708),

            "Miu" => array(64963, 34774),

            "Mo" => array(31704, 35021, 20925, 63878, 29577, 34284, 32995, 44996, 35515, 43716, 43972, 41878, 38030, 29872, 35761, 26055, 63471, 23987, 25237, 40934, 45252, 24527, 36811, 27296, 25525, 36293, 62193, 26560, 63733, 44228, 25010, 41713, 48533, 26802, 53999, 32191, 25084, 36596, 47755, 44740, 60824, 40692, 42692, 42436, 21948, 46727, 34006, 33750, 42180, 41924, 45447, 65219, 54492, 54234, 50918, 41412, 51682, 41668, 30960, 37518, 20439, 23688, 47492, 23696, 31386, 44484, 58089, 31642, 43460, 35722, 29427, 20476, 42948, 28575, 37360, 48529, 43204),

            "Mol" => array(27009),

            "Mou" => array(23766, 45508, 46020, 63725, 17916, 64662, 30671, 40184, 51958, 52443, 19181, 41883, 38548, 50406, 49284, 59615, 45764, 25488),

            "Mu" => array(58094, 24013, 48324, 32967, 33515, 53662, 61856, 47556, 49604, 55772, 49348, 47812, 53912, 36587, 49860, 48580, 26339, 49038, 18577, 64151, 58851, 48068, 25059, 47044, 46276, 23693, 47264, 46532, 46788, 47300, 42219, 40329, 53914, 29358, 31150, 36526, 23515, 61400, 49092, 25523, 33198, 27587, 50058, 32942, 19588, 48836),

            "Myeo" => array(59028),

            "Myeon" => array(17281),

            "Myeong" => array(53911),

            "Na" => array(50884, 31676, 57566, 52959, 50417, 51396, 31626, 51652, 51179, 30424, 18132, 62086, 27081, 34028, 25570, 39132, 51333, 27092, 21449, 39924, 39352, 50628, 33243, 51331, 22172, 59635, 20410, 51140, 33426, 26258, 28801, 50116, 50372, 37862, 32491, 31189, 40338, 54767),

            "Nai" => array(49629, 52676, 52712, 34716, 52932, 38097, 40417, 29413, 38862, 34963, 48856, 52164, 22924, 52420, 44947, 18372, 60818, 46556, 51908, 38366, 27023, 34186, 18351, 39298, 50079),

            "Nan" => array(45727, 20950, 43753, 43157, 25055, 31211, 17555, 61426, 55953, 61163, 27848, 44956, 44000, 33428, 36758, 40342, 28562, 53444, 61408, 20354, 53188, 32455, 53700, 32430, 51594, 47510, 21131, 63220, 28047),

            "Nang" => array(20989, 33159, 44511, 23244, 45726, 36766, 25047, 40337, 45191, 55786, 45699, 21748, 60640, 53956, 19664, 29331, 52962, 61075, 59103, 62105, 38640),

            "Nao" => array(20932, 27278, 17623, 29927, 52722, 27342, 23540, 18574, 53139, 30159, 17579, 60297, 54980, 49296, 57224, 61336, 53485, 42984, 39563, 44770, 23220, 38851, 39056, 54724, 61915, 28137, 55236, 17541, 54468, 19627, 22724, 24729, 62446, 18064, 54212, 28813, 43992),

            "Ne" => array(55492, 33969, 43994, 18388, 56048),

            "Nei" => array(56004, 57242, 24048, 54427, 19941, 52362, 18672, 33781, 38339, 40437, 61834, 18116, 55748),

            "Nem" => array(34975),

            "Nen" => array(23691, 56260, 44939, 50408, 42477),

            "Neng" => array(56516),

            "Neus" => array(33479),

            "Ngag" => array(34274),

            "Ngai" => array(18404),

            "Ngam" => array(43910),

            "Ni" => array(58052, 62946, 44013, 56548, 37763, 57284, 29638, 31409, 30139, 62621, 57540, 22760, 19860, 57796, 37013, 17649, 25315, 21644, 54152, 51596, 59611, 28619, 56772, 48108, 43408, 42123, 61072, 33220, 35298, 36091, 35277, 62091, 17371, 20927, 30205, 26061, 46231, 20108, 21966, 59076, 23471, 41945, 18166, 38814, 57028, 56033, 29405, 30354, 29395, 33752, 58564, 30390, 62198, 23776, 65261, 63114, 59332, 51178, 49045, 60142, 20124, 26307, 63904, 42466, 58308, 58820, 22507, 50049),

            "Nian" => array(61124, 42456, 24709, 26260, 60612, 54163, 65001, 30394, 33501, 60356, 21724, 40155, 60868, 21237, 54262, 59588, 39645, 47061, 62454, 21750, 42224, 17657, 35013, 31926, 56731, 27318, 43146, 59844, 60100, 20614),

            "Niang" => array(34017, 56715, 61380, 31969, 61636, 64139),

            "Niao" => array(54758, 39377, 49652, 38539, 21969, 23754, 62148, 61892, 55435, 57564, 58859),

            "Nie" => array(28157, 29070, 37335, 62916, 56455, 23180, 17898, 63684, 19598, 37096, 20922, 22981, 17647, 31380, 52103, 43250, 21221, 34792, 16848, 51097, 26300, 59125, 25308, 26331, 62404, 40938, 36039, 51078, 48013, 63428, 23432, 46736, 35726, 62660, 63940, 45549, 44020, 18835, 20452, 63172, 42132, 36580, 42887, 43158, 38035, 34790, 32198, 26843, 39362, 25276, 44696, 16850, 49120, 38101, 54413, 25571, 31111, 22491, 60890),

            "Nin" => array(57735, 35986, 32963, 64196),

            "Ning" => array(29382, 31884, 40130, 24552, 36505, 26315, 20884, 40874, 22260, 18073, 47333, 33932, 41669, 16770, 64216, 56971, 37767, 41413, 64708, 52447, 22772, 65220, 64452, 63473, 37251, 64964, 36492, 35212, 33420, 50077, 18683),

            "Niu" => array(51358, 42693, 43936, 42437, 32444, 33260, 31175, 21403, 41925, 23707, 51954, 61154, 61665, 42181),

            "Nong" => array(58013, 23222, 43717, 39058, 40394, 45202, 37828, 42949, 30945, 31363, 43205, 29662, 45017, 36022, 43461, 29406, 20733, 30391, 55193, 22976, 19120, 25042),

            "Nou" => array(61937, 35224, 27607, 59275, 37785, 30867, 16811, 19092, 36486, 34241),

            "Nu" => array(54658, 47489, 43973, 58854, 30705, 16569, 44741, 56294, 49793, 26035, 44485, 62437, 64480, 44229, 49382),

            "Nuan" => array(40351, 40095, 24816, 44997, 43164, 29084, 26250),

            "Nue" => array(45509, 45253, 38579, 51930),

            "Nun" => array(20988),

            "Nung" => array(23712),

            "Nuo" => array(46533, 56976, 31415, 63199, 27287, 64914, 46021, 22722, 60296, 17561, 44675, 53465, 45765, 49809, 40933, 46277, 19639, 22716, 23254, 24728, 48111, 19388, 21471, 63966, 37011),

            "Nv" => array(42221, 29627, 23248, 18582, 53230, 21474, 44276),

            "Nve" => array(37295),

            "O" => array(28857, 46789, 47328),

            "Oes" => array(61833),

            "Ol" => array(27265),

            "On" => array(27285, 19949),

            "Ou" => array(57503, 43482, 47045, 28868, 47557, 29153, 27640, 22426, 46996, 45546, 44953, 21678, 36566, 18823, 47301, 55268, 39627, 29130, 30140, 21956, 28809, 48069, 48773, 48325, 47813, 61169, 59106, 24989, 64230, 29946, 22929, 48581, 31741),

            "Pa" => array(30149, 49093, 36238, 29322, 48837, 53936, 50117, 49349, 58077, 36765, 63122, 57843, 37584, 49861, 49605),

            "Pai" => array(37562, 34781, 50885, 56224, 58845, 22502, 21674, 51397, 51653, 51141, 48601, 50373, 50629),

            "Pak" => array(29620),

            "Pan" => array(52165, 52894, 25499, 64227, 53701, 29068, 26033, 46222, 40608, 20657, 52677, 25246, 20973, 24497, 36763, 60291, 33944, 51909, 53445, 26569, 52933, 44016, 57841, 39306, 43494, 23169, 36748, 29659, 52421, 46811, 28646, 56803, 53189, 35816, 35467, 58268, 27348, 33764, 25337, 18414),

            "Pang" => array(54725, 18899, 54981, 18896, 21946, 24731, 20972, 53957, 35325, 62896, 59620, 28867, 54213, 29892, 54469),

            "Pao" => array(53986, 55749, 52190, 62433, 33672, 55493, 24245, 25032, 37552, 17148, 20661, 55237, 56773, 25558, 36588, 33787, 36049, 58864, 33170, 20189, 36768, 58347, 56005, 56480, 17802, 56517, 56261),

            "Pei" => array(24213, 61325, 39083, 58565, 33993, 54939, 47084, 45962, 57029, 52960, 24049, 50404, 31122, 26251, 29681, 44278, 23774, 64224, 58516, 58821, 58309, 44277, 57285, 17296, 21443, 57541, 27626, 24450, 44161, 59077, 50586, 29401, 57797, 58053),

            "Pen" => array(19906, 56453, 59333, 39853, 54500, 59589),

            "Peng" => array(27529, 60357, 64132, 31155, 19165, 28649, 23191, 61922, 59845, 26563, 31120, 32923, 60101, 28829, 55520, 50327, 61381, 22665, 61637, 16567, 60869, 35727, 19910, 31156, 62405, 34488, 34690, 61125, 30097, 36589, 19188, 26048, 33757, 62661, 23261, 28136, 62917, 54679, 64658, 39300, 63173, 16796, 30384, 45811, 40947, 60613, 61893, 32477, 38899, 62149, 26063, 35565, 19655, 43160, 19356, 54680),

            "Peol" => array(47515),

            "Phas" => array(34702),

            "Phdeng" => array(17386),

            "Phoi" => array(28289),

            "Phos" => array(54406),

            "Pi" => array(34717, 42950, 17586, 35054, 46721, 64709, 27060, 31217, 36323, 27548, 40075, 38114, 23011, 22498, 39815, 63648, 63685, 58097, 40442, 51585, 62112, 63429, 64197, 64453, 52382, 30134, 43462, 60398, 23746, 64730, 56733, 18670, 46826, 31158, 35827, 16559, 30680, 18101, 45532, 30168, 17302, 25849, 33183, 28365, 41414, 47090, 42438, 45019, 19408, 24769, 64965, 21227, 28100, 23448, 48366, 41670, 43657, 38074, 63989, 19407, 26298, 56539, 41926, 39569, 42968, 25080, 39907, 17141, 36999, 59616, 47751, 39652, 45553, 18357, 22250, 17037, 47002, 65221, 45978, 28650, 27590, 42694, 63941, 42182, 39107, 43206, 41710, 60912, 55004, 55729),

            "Pian" => array(59124, 43718, 20210, 37074, 30859, 27379, 59878, 59543, 44230, 18072, 16836, 59015, 22745, 56811, 43974, 64234, 38869, 18393, 35313, 39893, 44486, 40436, 24562, 24050, 58613, 53978),

            "Piao" => array(36528, 30708, 45254, 45510, 37614, 32447, 18626, 62612, 43763, 26607, 56452, 20970, 53728, 43502, 27083, 28641, 33460, 52967, 18321, 26863, 44998, 44742),

            "Pie" => array(45766, 51349, 46022, 44523, 45016, 30439, 45451),

            "Pin" => array(35762, 31927, 28331, 17651, 45286, 20721, 46790, 39640, 47495, 18869, 25803, 46534, 46278, 51686, 58763, 47046, 62186, 46054, 47302, 20428, 44530, 45033, 16879, 22422),

            "Ping" => array(53386, 26291, 49094, 23278, 41870, 17862, 29355, 31416, 48326, 52876, 53992, 19085, 47814, 59269, 48838, 48070, 23264, 48582, 26573, 38798, 49606, 44955, 55963, 27537, 21124, 54006, 30164, 37561, 31633, 49350, 29114, 18421, 33741, 37321, 47065, 19118, 30367, 45454, 17033, 27310, 34498, 37056, 47558),

            "Po" => array(32432, 57751, 51654, 53208, 40345, 19847, 40588, 57070, 28913, 20451, 47082, 50630, 27623, 64396, 49862, 51182, 50118, 38369, 20193, 49820, 50374, 26511, 52723, 27571, 25289, 51142, 18061, 17055, 50886, 51398, 37524, 43163, 60135),

            "Pou" => array(61573, 49568, 63624, 26514, 18671, 51910),

            "Ppun" => array(52611, 21126),

            "Pu" => array(17878, 59631, 27545, 55494, 28101, 37607, 60405, 22231, 44011, 54214, 28599, 29362, 52166, 51870, 20360, 53702, 53190, 46827, 59865, 32142, 21729, 42981, 27311, 45544, 37001, 32398, 52422, 33252, 56288, 28145, 52678, 26825, 26855, 40921, 54726, 44216, 54470, 54982, 19871, 53958, 53446, 36551, 55238, 43677, 58264, 44693, 52934, 58607, 65159),

            "Qi" => array(59284, 39388, 18658, 59590, 49124, 23501, 22221, 60102, 21709, 60390, 52872, 27292, 58770, 51434, 59846, 22698, 59024, 57586, 39835, 17102, 31422, 60404, 20158, 20918, 63901, 37623, 47577, 22501, 17103, 29847, 19646, 40635, 63463, 63468, 63975, 58822, 50061, 36503, 54258, 50836, 28660, 60614, 40936, 19124, 40627, 61382, 58566, 49885, 20374, 17564, 21143, 56774, 56722, 56006, 43927, 53984, 27025, 23427, 31441, 56262, 38588, 41616, 56714, 57030, 27280, 58310, 32990, 59023, 57286, 58054, 34946, 36544, 22240, 59368, 56518, 57542, 27893, 33176, 51945, 34177, 29949, 62607, 62348, 57307, 43745, 59078, 50580, 20399, 26552, 22723, 49653, 59334, 60870, 60358, 61126, 33749, 42476, 28084, 26769, 57798, 26046, 23510, 37611, 34553, 49624, 19431, 29940, 59637, 32388, 40624, 54934, 63174, 62918, 64901, 58010, 39379, 35223, 62345, 64409, 33670, 23473, 50590, 56730, 64966, 63686, 19946, 57571, 63942, 64710, 23238, 64454, 64198, 35278, 35996, 39360, 33716, 30644, 44269, 28317, 62444, 29643, 58850, 22418, 32208, 63430, 29585, 54253, 56797, 36252, 60316, 46229, 20654, 29319, 64130, 23732, 37306, 33972, 37839, 41157, 25792, 19387, 18420, 33010, 39163, 20395, 31220, 59639, 32249, 41719, 34713, 18646, 22002, 38553, 39620, 30201, 37818, 39669, 62150, 37622, 60810, 41606, 36063, 39302, 45799, 42135, 24510, 60660, 30417, 61638, 39558, 61894, 30086, 62406, 48092, 43233, 62662, 48616, 24235, 53637),

            "Qia" => array(41415, 39054, 41671, 29619, 53889, 61059, 33178, 35218, 27828, 22664, 55005, 65222, 40666, 19937, 38892),

            "Qian" => array(44231, 45767, 48099, 51691, 37366, 46023, 53901, 23245, 37789, 46279, 55271, 21454, 44743, 21179, 25796, 44999, 23270, 35209, 28824, 33227, 24715, 40412, 59358, 24768, 59891, 31681, 19358, 24818, 25586, 44487, 28362, 20121, 40350, 46473, 18362, 32989, 21178, 41112, 36483, 20670, 26570, 64651, 31167, 45042, 59550, 39583, 30145, 51188, 61343, 32150, 47303, 24777, 52700, 23938, 59356, 48513, 22660, 25576, 47047, 48089, 35984, 59782, 31920, 65000, 36247, 46535, 46791, 27863, 45511, 41927, 30907, 43719, 35474, 42439, 25784, 20421, 20429, 16600, 59282, 43975, 24802, 21730, 49056, 42695, 21132, 16583, 18075, 40136, 21640, 26566, 58586, 20710, 27546, 42951, 21896, 25738, 56793, 43489, 26006, 43207, 47068, 42183, 65178, 19587, 42467, 21492, 24763, 20879, 21236, 29076, 25575, 27641, 52115, 43501, 45255, 41437, 33682, 21138, 62092, 63631, 40634, 25069, 26107, 35001, 36309, 50067, 24977, 47845, 43463, 42393, 21987, 28564, 28820, 35993, 30446, 30687, 29910, 48613),

            "Qiang" => array(31641, 40352, 39621, 28118, 23709, 48839, 52710, 51689, 25292, 23183, 42633, 20171, 18624, 37766, 34497, 48373, 18643, 25489, 52639, 34182, 33417, 35775, 57329, 49644, 49351, 54411, 23978, 28097, 27308, 50421, 32170, 62342, 28587, 47559, 48583, 47815, 57059, 43242, 54932, 48071, 48327, 60143, 34011, 38619, 27367, 55708, 49095, 40420, 18919, 53231, 47855, 59533, 39840, 57074),

            "Qianke" => array(49027),

            "Qianwa" => array(39341),

            "Qiao" => array(37859, 47331, 51655, 52935, 32490, 39150, 48602, 32499, 43162, 41135, 54944, 54505, 52679, 50887, 21463, 38603, 39348, 31207, 22229, 48867, 23480, 28141, 20162, 18925, 38638, 18360, 20188, 51911, 52167, 55174, 42138, 53191, 22747, 52423, 29571, 31987, 48014, 40334, 17884, 35977, 49863, 24283, 24756, 20206, 49607, 51598, 21897, 50119, 58584, 52717, 50375, 39865, 25312, 52981, 34272, 33760, 23961, 24967, 62111, 32435, 50631, 61916, 40903, 36273, 56282, 37784, 55527, 19143, 21184, 16614, 41189, 51399, 35290, 51143, 38025),

            "Qie" => array(18359, 42971, 43150, 65247, 54471, 54215, 40578, 35216, 39864, 44003, 43750, 33413, 28080, 27334, 53703, 40386, 53959, 56464, 16790, 16630, 39909, 33767, 24760, 23995, 32459, 27831, 26302, 59123, 50927, 17594, 28635, 53447, 19589),

            "Qin" => array(19098, 39858, 27795, 58771, 31470, 28830, 60638, 39367, 24978, 50399, 36491, 57287, 30598, 17356, 62605, 49396, 59613, 54727, 56007, 21653, 47840, 27842, 22485, 55495, 36285, 49805, 23947, 36779, 43144, 30359, 24538, 36280, 57501, 40367, 25562, 32908, 56263, 35724, 57031, 54761, 52188, 42641, 56462, 49797, 33269, 33004, 40945, 56036, 64498, 39052, 20431, 64497, 22264, 56519, 57312, 25835, 22259, 54983, 26612, 55239, 27820, 24968, 29666, 42385, 56775, 25826, 55751, 39879, 52626),

            "Qing" => array(42486, 58055, 57543, 49395, 57799, 58311, 38041, 22496, 56540, 30860, 57581, 20125, 60103, 60615, 42630, 63118, 62711, 45975, 35029, 60359, 58567, 57746, 23528, 62944, 39925, 59591, 61577, 24494, 31923, 59335, 41139, 59847, 52612, 60406, 62851, 28893, 48536, 58823, 59079, 23452, 48281, 58522, 18063, 42645, 22749, 16771, 48520),

            "Qiong" => array(24282, 50320, 30623, 52467, 58588, 28549, 50934, 63194, 61127, 63382, 18617, 18860, 33453, 32203, 19353, 23736, 38347, 54923, 36525, 30609, 37507, 42655, 35789, 60871, 31391, 50591, 40625, 18104),

            "Qiu" => array(53145, 65242, 34749, 18423, 38397, 46213, 38137, 29174, 18413, 21964, 28918, 62663, 16530, 45298, 63175, 16845, 62407, 18115, 60641, 21931, 64666, 18157, 25295, 30600, 28304, 61383, 61895, 18561, 40069, 56281, 61639, 27574, 51186, 32462, 26807, 64246, 36286, 17850, 28811, 45545, 27387, 46297, 25043, 50164, 32910, 28883, 36813, 43679, 37808, 18609, 55781, 26585, 18349, 16592, 16887, 31379, 27385, 35317, 19940, 18165, 64759, 43676, 29340, 27079, 40414, 53221, 31420, 48539, 35283, 62919, 28806, 38625, 22423, 21986, 42637, 53211, 58602, 62151, 33434, 49818, 56564),

            "Qu" => array(38587, 38131, 16629, 17660, 31964, 19708, 28401, 59277, 27889, 29841, 61684, 61943, 55188, 34503, 25808, 21660, 48859, 55937, 36082, 40438, 20471, 63431, 53490, 51073, 19077, 44001, 29418, 64199, 63687, 19901, 31986, 58342, 64967, 64711, 41168, 63943, 64455, 19641, 27843, 61164, 17805, 31890, 46491, 65223, 20669, 41928, 30973, 40325, 42440, 33742, 31160, 41672, 41148, 29652, 24708, 55011, 20179, 21971, 31484, 39145, 17404, 61418, 42184, 35305, 22995, 41416, 46056, 26575, 39676, 57837, 21421, 38081, 33224, 41438, 35560, 39838, 62353, 59873, 46065, 25820, 19141, 57753, 44267, 21200),

            "Quan" => array(30678, 54678, 46494, 31463, 45000, 63370, 34446, 48032, 42907, 44488, 44232, 28595, 56563, 26813, 50592, 45724, 65006, 43720, 47754, 53655, 42696, 57732, 61828, 43747, 37105, 26610, 59265, 47578, 47776, 43208, 43976, 45256, 39880, 27389, 26102, 42952, 17903, 60385, 27534, 56567, 43464, 22719, 17130, 39415, 55448, 44744, 27822, 27347, 36820, 34476, 21656, 37267, 18907, 36067, 61342, 45294, 47591, 19134, 34508, 23181, 30608, 20183, 42136),

            "Que" => array(33421, 28665, 20640, 46024, 43764, 25285, 46280, 45512, 37802, 23989, 24500, 43245, 38064, 18100, 21961, 45768, 62874, 46536, 47048, 46792, 58000, 47304, 21905),

            "Qun" => array(47560, 25809, 47816, 29889, 27869, 59017, 41102, 61319, 28301, 53989),

            "Ra" => array(37505, 16577),

            "Ram" => array(56711),

            "Ran" => array(39050, 48584, 37311, 48328, 56284, 48840, 19609, 18377, 30347, 31403, 55287, 22919, 34256, 27333, 32976, 22211, 25549, 39376, 34547, 48072, 50674, 57221),

            "Rang" => array(27351, 46217, 24796, 42736, 49864, 49352, 32160, 49608, 49096, 64748, 33512, 54937, 56719, 31159, 43139, 19371, 61572, 50120, 30400, 54161, 36055),

            "Rao" => array(35056, 57760, 50632, 20203, 24468, 50827, 44262, 16576, 50376, 59868, 28343, 58344, 33226, 50888, 22994, 30431),

            "Re" => array(55954, 25500, 48345, 57759, 51144, 51400),

            "Ren" => array(53192, 21892, 28130, 61656, 52680, 41345, 23750, 18385, 29404, 34275, 17086, 53448, 51656, 33268, 50673, 57743, 26038, 38355, 44704, 53704, 53960, 23190, 33216, 26007, 19907, 20626, 37084, 40586, 39639, 65263, 58511, 52936, 22205, 58252, 36028, 51912, 49122, 52168, 52424, 40696, 32492, 26605, 39663, 19157, 33775, 31468, 30908, 55517, 22983, 35254, 43671, 57750, 59864, 57238, 62428, 60905),

            "Reng" => array(30686, 27061, 54472, 54216, 26054),

            "Ri" => array(24561, 56986, 54728, 32482, 21235, 61575),

            "Rong" => array(51431, 25791, 23735, 40685, 24255, 29633, 29117, 51681, 34443, 37515, 51853, 56520, 30872, 38547, 28051, 22175, 49050, 57032, 62945, 53654, 54984, 36550, 59010, 29837, 56776, 55752, 55240, 55496, 50665, 26598, 26784, 22158, 59019, 29086, 60821, 23948, 57288, 38095, 36081, 36302, 23223, 36012, 56264, 29592, 61170, 37585, 56008, 54402, 54682, 18153),

            "Rou" => array(24808, 35045, 27638, 32429, 47095, 35549, 37625, 20888, 24716, 58056, 29165, 42911, 58869, 27634, 22923, 32955, 56308, 25270, 57544, 57800, 23748, 28316, 31944, 31148),

            "Ru" => array(60616, 60125, 19960, 58312, 39566, 23950, 62614, 41602, 17030, 59336, 64385, 57828, 21689, 57585, 24224, 24000, 58568, 32225, 44274, 58261, 39928, 58824, 40163, 28408, 59872, 47326, 59080, 40686, 28919, 25750, 31454, 45796, 58502, 34699, 19921, 17298, 60360, 20163, 60104, 59848, 43247, 29408, 59592, 34762),

            "Ruan" => array(20405, 32172, 39900, 50155, 19892, 33214, 30637, 28878, 61128, 60872, 48265, 51603),

            "Rui" => array(29118, 43230, 18329, 61384, 19863, 38845, 17088, 34711, 48016, 25307, 36792, 25518, 41966, 18380, 45445, 51081, 33222, 18636, 21710, 18843, 51164, 47346, 61640, 61896),

            "Run" => array(62408, 62152, 29929, 25577, 39325, 62616),

            "Ruo" => array(32246, 26080, 43653, 27552, 60823, 28105, 30879, 55181, 62920, 22010, 62664, 38134),

            "Sa" => array(41626, 38803, 24817, 42712, 25052, 65002, 27874, 63688, 20948, 33772, 43161, 63432, 63176, 60888, 17815, 42397, 38376, 28647, 19947, 34715, 24523, 56299, 37099),

            "Saeng" => array(54166),

            "Sai" => array(64200, 30650, 31982, 47770, 64456, 52122, 63944, 59360, 21639, 61574, 30710, 39866, 57488, 37081, 30595, 64712),

            "Sal" => array(33740, 28545),

            "San" => array(39359, 33008, 53664, 25833, 45558, 22460, 20938, 24194, 53402, 58242, 41673, 30853, 19700, 41417, 64968, 53385, 55028, 51610, 52450, 22169, 21180, 42987, 17084, 22204, 65224, 29071),

            "Sang" => array(35822, 51846, 29414, 42441, 43762, 42185, 39121, 64222, 39576, 63638, 57325, 41929),

            "Sao" => array(26359, 43209, 34294, 32242, 33983, 33970, 33267, 55194, 65264, 43465, 41948, 57234, 35263, 42953, 53404, 42697, 44959, 53991, 64402, 25327, 65270, 22770, 65003),

            "Se" => array(28570, 43721, 17380, 44701, 56710, 44433, 40908, 58768, 59037, 25062, 21482, 28058, 57500, 63123, 41174, 28135, 50392, 42223, 28655, 33259, 27036, 41455, 31974, 44233, 20958, 34487, 60829, 39343, 41968, 44445, 27053, 20160, 30647, 43977, 27038),

            "Sed" => array(21457),

            "Sei" => array(31682),

            "Sen" => array(44489, 42648, 18898),

            "Seng" => array(20468, 44745),

            "Seo" => array(32489),

            "Seon" => array(19647),

            "Sha" => array(40322, 46793, 36799, 33667, 37109, 23744, 46537, 50127, 21448, 25817, 32953, 41153, 40129, 26841, 44790, 42732, 47049, 34025, 36853, 20906, 45513, 45001, 44434, 32390, 46281, 45769, 45257, 46025, 17039, 55192, 35828, 59638, 36073, 61680, 26264, 50420, 36787, 26058),

            "Shai" => array(47561, 61845, 33210, 26576, 42997, 27578, 27067, 22970, 47305),

            "Shan" => array(54935, 50889, 56962, 35043, 47067, 51657, 36489, 21123, 62438, 24026, 48073, 57072, 51145, 43226, 57304, 51401, 50121, 39123, 41117, 30418, 59544, 22519, 43166, 44535, 32498, 22775, 61330, 29934, 42197, 55957, 33776, 38887, 35508, 50633, 17806, 25302, 50377, 27095, 46579, 39103, 48020, 49097, 61403, 52462, 49353, 53212, 16595, 18346, 23215, 21407, 44788, 47817, 30102, 48329, 48585, 16632, 26615, 37064, 60129, 36319, 26756, 48841, 23176, 37340, 46226, 49865, 49609, 33729, 33217, 38584, 22505, 50335, 39089, 36757, 35573, 34026, 51189, 24297, 25497, 39556, 33171, 56469, 49053, 64228, 40929),

            "Shang" => array(32219, 53193, 16769, 28889, 43932, 27880, 31166, 16566, 52681, 41196, 46311, 53449, 30352, 41089, 17615, 64386, 51913, 24209, 64757, 58601, 52937, 52169, 17309, 52425, 37274, 26525, 34262, 55532, 30931, 27892, 53705, 19402),

            "Shao" => array(55497, 22216, 48778, 56009, 56265, 55753, 49115, 56521, 36048, 53732, 28872, 35773, 45031, 54401, 30891, 64484, 54515, 25760, 28805, 54473, 61332, 58099, 47604, 46742, 31431, 33935, 54217, 53961, 54729, 55794, 34463, 59100, 39411, 27101, 54985, 55241, 23023, 32245, 38602, 64927),

            "She" => array(62875, 19146, 25233, 20436, 58313, 58825, 58057, 36239, 19954, 37556, 56277, 43244, 56729, 60151, 29677, 55441, 36014, 34767, 52882, 57033, 30610, 56777, 56537, 33177, 46318, 59081, 42722, 26333, 18125, 57545, 32456, 26821, 34693, 58569, 59337, 59593, 57289, 34253, 57801, 51160),

            "Shen" => array(51684, 62665, 54933, 37108, 21742, 17108, 38367, 29618, 38390, 22936, 61897, 31375, 62153, 62191, 54239, 41138, 62409, 40919, 22933, 63433, 62864, 18884, 43497, 32175, 38063, 30436, 55282, 36035, 35509, 63177, 32215, 23763, 24569, 19586, 63689, 29617, 62921, 61579, 19084, 46986, 47066, 61641, 28859, 47254, 31915, 61385, 29371, 36023, 36234, 60361, 60105, 47069, 39157, 59020, 19090, 60033, 60873, 60617, 30349, 57754, 24750, 34505, 19393, 36243, 26030, 63135, 37361, 19915, 50655, 22996, 38612, 56968, 59849, 23505, 28081, 61129, 38605, 55447, 49795, 40380),

            "Sheng" => array(62189, 44930, 33692, 41418, 62880, 31993, 37817, 38373, 39932, 65225, 39313, 18879, 22487, 35801, 39049, 32194, 31896, 28618, 38338, 21657, 19417, 23980, 36740, 34197, 41674, 41930, 55684, 42442, 31659, 52884, 63945, 39318, 34971, 32154, 54917, 18659, 62699, 64969, 64201, 27370, 64713, 20117, 42140, 64457, 37610, 65241, 64149, 34282, 27064, 42186, 33951, 53235),

            "Shi" => array(55475, 43978, 55941, 44490, 40927, 50828, 42698, 19626, 43466, 20464, 23803, 19163, 24502, 33925, 33718, 47259, 29067, 23793, 44234, 51600, 26051, 25007, 42954, 20169, 51146, 26517, 42902, 49610, 50122, 53706, 57475, 53962, 24208, 25521, 56298, 27057, 30897, 49907, 63721, 23488, 31201, 51914, 62102, 63646, 52938, 54474, 49354, 18049, 52170, 53450, 60140, 49098, 22168, 40418, 33521, 48842, 25221, 52426, 50890, 57733, 54218, 49866, 63377, 48586, 59279, 32385, 50634, 59118, 51658, 53899, 40661, 32223, 19428, 23946, 27589, 31953, 50378, 31129, 42995, 36065, 31990, 25085, 37019, 28370, 41146, 27645, 30166, 36794, 40674, 35810, 51855, 19091, 55002, 17113, 45535, 35809, 18361, 52104, 38354, 52682, 56708, 27859, 34772, 23005, 57331, 40369, 51402, 29583, 45983, 17849, 53194, 44746, 48098, 45770, 45002, 31954, 20730, 40165, 22774, 35318, 31198, 56193, 26508, 17813, 31471, 62175, 47818, 52097, 45514, 25272, 46794, 61853, 62966, 41628, 43722, 40648, 56220, 30087, 20706, 40846, 19133, 39156, 57756, 31658, 38329, 29902, 23544, 41169, 20472, 35756, 59869, 35540, 16867, 23949, 46538, 23285, 40188, 21207, 40444, 45258, 58870, 30435, 18874, 59630, 35062, 47050, 48330, 48074, 48515, 27276, 47562, 47306, 25729, 47605, 29848, 17123, 29333, 43741, 43210, 62939, 46026, 49900, 30133, 46282, 18602, 33164, 20681, 19171, 36236, 53916, 54925, 39836, 23007, 20617),

            "Shike" => array(48771),

            "Shiwa" => array(38829),

            "Shou" => array(60571, 47079, 56266, 57034, 27823, 56010, 56969, 38314, 40422, 63457, 21182, 56201, 56778, 26308, 18091, 53470, 54986, 54730, 42885, 55498, 56522, 38536, 55754, 48372, 55242),

            "Shu" => array(63178, 61667, 62922, 17286, 63946, 63690, 64202, 22678, 64714, 41419, 20423, 63434, 22672, 40907, 23755, 60874, 43421, 61898, 62410, 37884, 61386, 20656, 20432, 28407, 20667, 24252, 62862, 29943, 37334, 62109, 26341, 58520, 20952, 46484, 63716, 21735, 36601, 39873, 38326, 38650, 49042, 41164, 21634, 23497, 61642, 60911, 64970, 22225, 17609, 30648, 17384, 65226, 33181, 64458, 24547, 62187, 21181, 42380, 22943, 37852, 59338, 57802, 33468, 59026, 26592, 17839, 35005, 58570, 52378, 43243, 59594, 59082, 58058, 63637, 45036, 58314, 59850, 62351, 51843, 40170, 41959, 58826, 49113, 33410, 46486, 44518, 57546, 30954, 40876, 33680, 60554, 60362, 63727, 43916, 26105, 60106, 54235, 18650, 22480, 29101, 61130, 60618, 33438, 55024, 46052, 43395, 55692, 62666, 62154, 52456, 57290, 38109, 40892, 24565, 23771),

            "Shua" => array(42976, 22741, 41675, 41931, 52452, 30943),

            "Shuai" => array(42955, 42699, 45299, 39822, 42187, 42443),

            "Shuan" => array(22249, 43211, 43467, 22980, 50659, 41868),

            "Shuang" => array(22011, 29947, 17350, 19699, 44235, 37790, 25781, 22975, 24807, 48792, 21393, 30089, 31738, 43979, 63106, 56473, 28907, 43723, 65163, 55270, 23283, 33522),

            "Shui" => array(37046, 58523, 45259, 59291, 26325, 40078, 26837, 45003, 25553, 44747, 27369, 56458, 51602, 43154, 40899, 44491, 60570, 27861, 57315),

            "Shun" => array(45771, 17140, 34481, 28850, 25999, 46283, 46027, 27058, 45515, 39149, 65250, 35530, 63896),

            "Shuo" => array(62685, 43749, 43931, 50153, 63454, 27878, 21684, 46795, 63973, 25734, 46539, 47307, 47051, 40370, 18074, 51936),

            "Si" => array(50123, 17661, 33786, 29415, 49355, 51403, 40896, 50379, 33153, 27890, 23791, 63903, 27876, 37322, 34766, 19174, 31439, 25039, 49867, 57827, 55690, 57830, 51147, 50838, 46496, 58779, 38811, 62691, 19340, 61145, 50891, 50635, 42726, 34203, 64897, 60396, 36030, 26292, 47344, 36044, 27792, 30603, 47563, 49639, 31421, 48331, 26754, 48843, 49099, 63974, 27068, 48587, 29083, 53471, 53234, 63127, 48075, 51439, 18148, 31367, 20623, 63972, 47819, 17870, 20929, 29935, 27363, 17590, 16516, 52184, 19638, 31640, 17091, 32495, 26362, 53378, 58337, 31126, 23454, 33763, 41182, 48861, 49890, 36335, 37582, 40323, 28886, 38610, 49611, 31960, 29368, 40138, 54259, 60145, 38626, 19682, 34545, 21686, 38383),

            "So" => array(16847),

            "Sol" => array(29313),

            "Song" => array(52683, 52427, 53451, 52939, 38594, 53195, 40689, 28144, 47749, 19347, 54930, 41363, 36326, 25301, 23185, 16852, 60317, 41434, 37250, 29591, 49889, 62606, 46998, 48010, 60642, 51659, 34198, 40086, 55437, 49636, 52171, 41203, 42211, 51915, 59536, 46577, 49117, 32921, 54497, 38835, 16590, 41361),

            "Sou" => array(27350, 44951, 57235, 53963, 28914, 50651, 24815, 29936, 26593, 32230, 53122, 54752, 39087, 37533, 47257, 23700, 42222, 54219, 62706, 44677, 45792, 63886, 28384, 51346, 52207, 61571, 17295, 54475, 29385, 51426, 30378, 44268, 53707),

            "Su" => array(55755, 22167, 33690, 55499, 36523, 33691, 36283, 57547, 56011, 48352, 20361, 57291, 22228, 56523, 53634, 38283, 22771, 54731, 54987, 54774, 16568, 25774, 47843, 17539, 29317, 25783, 34805, 55243, 21675, 60889, 54663, 50585, 19404, 22220, 17079, 54746, 19952, 27071, 22701, 24548, 25524, 49816, 51608, 39581, 63987, 56779, 30919, 48264, 29631, 35322, 21751, 29142, 37339, 37874, 34961, 33483, 63709, 26875, 26820, 27288, 56267, 27103, 41718, 28895, 57244, 17347, 30938),

            "Suan" => array(27055, 58315, 22405, 31669, 36024, 58059, 26553, 57803),

            "Sui" => array(60875, 59851, 17074, 22710, 56477, 27891, 30366, 43935, 29338, 30135, 24786, 60619, 60363, 29082, 49293, 59083, 51162, 21983, 56812, 31455, 21483, 58597, 60107, 23219, 34221, 61131, 41445, 28825, 23479, 59595, 33409, 27309, 54155, 36548, 29397, 30681, 28139, 58761, 63366, 59339, 39911, 58827, 22214, 58571, 24007, 61852, 46301, 24966, 35714, 23767, 39660, 37823, 30695, 23232, 63636),

            "Sun" => array(53493, 28846, 47330, 28873, 22219, 29075, 61899, 39114, 29610, 21433, 49398, 42461, 61643, 20364, 33688, 31718, 37049, 61387, 28819, 48873, 63713, 35770, 38557, 34190, 23290),

            "Suo" => array(17375, 63691, 38374, 21164, 27110, 44437, 36838, 36268, 50588, 61062, 21198, 39315, 59778, 63720, 62411, 49888, 27335, 46822, 18093, 62667, 18859, 51444, 62155, 33013, 63947, 63435, 39667, 31418, 56992, 62923, 29914, 63179, 61407),

            "Ta" => array(30677, 42188, 38535, 19173, 57245, 25564, 24810, 48617, 53146, 20150, 50567, 60061, 20461, 23018, 28375, 64715, 64971, 59522, 41932, 40940, 18154, 56805, 59795, 25752, 36817, 17628, 16514, 64203, 64133, 64459, 44448, 27573, 65227, 58084, 52195, 33933, 34697, 26079, 41676, 63643, 41420, 18603),

            "Tae" => array(27602),

            "Tai" => array(52380, 62087, 33250, 30405, 43468, 34491, 17041, 43724, 60043, 50924, 34947, 32171, 58782, 42444, 42700, 24517, 21749, 43980, 16533, 43212, 41691, 47070, 53742, 21999, 29320, 42956, 19596, 52469, 17812, 59523, 44492, 63119, 64393, 44236, 18107, 55542, 50411, 34201),

            "Tan" => array(26595, 64134, 39057, 58350, 33530, 40384, 47564, 48076, 18888, 23255, 47820, 49100, 48332, 16519, 27845, 30433, 31193, 21914, 40604, 48588, 26285, 50837, 26322, 48844, 50568, 40849, 25057, 48362, 46028, 23188, 36312, 47308, 62090, 45275, 45516, 45772, 44748, 42718, 45260, 23184, 45004, 40408, 22424, 25520, 38848, 46284, 53909, 37835, 46540, 49801, 21719, 34005, 21989, 46796, 47052, 50415, 41097, 39817, 34193),

            "Tang" => array(20924, 44019, 26854, 23258, 26864, 45557, 19382, 26548, 26564, 28400, 17340, 50636, 51148, 19642, 42483, 52172, 39090, 34720, 62101, 37608, 52428, 43496, 44435, 56465, 34534, 51404, 21498, 52953, 60913, 17897, 51660, 31216, 51916, 21997, 31975, 19943, 37372, 28296, 50124, 50892, 36827, 56303, 21127, 42735, 49356, 43140, 51956, 21707, 30414, 55938, 48354, 59364, 45190, 31177, 18411, 26269, 31128, 49612, 49868, 28640, 50380, 46751),

            "Tao" => array(30192, 38372, 64644, 18310, 36830, 54220, 35569, 30701, 31446, 20722, 27839, 20205, 48088, 54007, 64479, 53708, 34752, 36533, 27089, 18894, 21694, 54476, 33687, 23521, 37612, 53964, 54732, 24511, 29074, 53452, 37359, 52684, 25789, 31956, 52940, 31887, 64649, 37331, 55244, 38785, 38795, 35564, 34200, 38316, 46478, 53196, 47848, 34451, 54988, 65168),

            "Tap" => array(31406),

            "Te" => array(38616, 36547, 35044, 50080, 55500, 45023, 25551, 39618, 44015, 40910),

            "Teng" => array(36337, 19643, 30450, 55756, 19692, 36086, 18931, 33996, 21691, 41859, 24790, 56012, 47246, 56268, 56524, 25245, 26559, 33503, 63723, 37628, 34500),

            "Teo" => array(31366),

            "Teul" => array(22934),

            "Ti" => array(58828, 23542, 23033, 26354, 43922, 26099, 63633, 30707, 33756, 31733, 28380, 39160, 31389, 40894, 37053, 30380, 55686, 33738, 58060, 36325, 38647, 44789, 58316, 34010, 60364, 60108, 39923, 41607, 59340, 21451, 36339, 33709, 18363, 25061, 59612, 62870, 36058, 37351, 36762, 22938, 53132, 35472, 53733, 43491, 41627, 59596, 62354, 54257, 31697, 59084, 46480, 20703, 50160, 59852, 26106, 34437, 45287, 43138, 21468, 57292, 57036, 56780, 57548, 58572, 21220, 38070, 48871, 22751, 43149, 27637, 57804, 24724, 25015),

            "Tian" => array(30894, 45550, 61900, 25283, 19612, 42128, 23726, 33710, 28827, 27372, 52355, 60876, 19681, 29145, 22268, 61388, 28908, 50316, 27572, 25594, 17642, 27565, 35320, 22194, 27898, 58857, 50147, 29125, 19384, 60620, 36764, 19144, 61644, 61132, 55779, 33154, 35462, 23476, 39340, 62858, 24787, 51082, 62412, 35733, 55173, 62156, 33510, 33254, 34188, 39345, 56798, 24492, 29614, 17363, 39919, 24805),

            "Tiao" => array(18872, 30658, 33481, 38853, 59126, 65172, 62668, 63212, 48113, 59278, 28900, 35529, 39916, 26256, 26365, 46838, 54164, 30915, 63692, 37315, 19398, 18838, 63180, 27799, 29077, 40182, 54424, 27020, 30950, 18317, 30901, 63436, 29146, 39890, 62924, 17359, 64908),

            "Tie" => array(20185, 40930, 30157, 64204, 40434, 18320, 53751, 38127, 64460, 31426, 50909, 63948, 36579),

            "Ting" => array(24975, 50150, 59624, 25582, 46477, 29596, 65175, 27321, 61660, 42445, 41154, 40898, 38850, 25743, 35807, 42189, 41677, 30616, 33769, 42701, 42957, 18159, 57499, 35267, 20639, 17836, 19330, 20104, 35522, 43766, 25294, 18134, 20693, 40700, 39148, 41933, 65228, 18583, 34949, 41421, 23490, 64972, 38589, 64716, 55438),

            "Tol" => array(26753),

            "Tong" => array(58510, 54165, 44237, 56025, 43725, 54426, 21965, 50669, 33201, 44493, 33462, 43213, 20707, 55199, 35831, 28387, 35763, 41199, 23983, 52448, 36041, 32483, 19590, 53147, 18858, 49048, 37290, 59294, 35517, 64226, 60551, 36795, 31165, 22222, 29073, 46285, 19853, 44749, 60892, 20881, 45773, 45261, 43981, 41433, 43469, 45005, 21978, 54688, 29367, 45517, 46029, 27381, 31381),

            "Tou" => array(35025, 18902, 52698, 46797, 37309, 47053, 38590, 34698, 32188, 61401, 17126, 46541, 36079, 51842, 21899, 33163, 43924, 24302, 26060, 47309, 22524),

            "Tu" => array(52189, 40441, 33758, 29433, 41692, 26874, 33223, 17138, 18937, 34021, 43401, 49613, 50125, 19848, 51950, 18417, 17051, 20962, 37882, 49869, 48589, 36068, 57741, 35784, 22521, 17405, 62083, 48333, 60807, 26287, 41884, 47821, 25782, 47565, 43509, 27782, 57480, 55442, 56987, 30861, 48077, 20367, 34223, 42141, 23737, 23753, 60046, 35554, 17544, 17800, 49101, 33936, 50317, 48845, 23699, 49357),

            "Tuan" => array(17288, 25020, 39418, 28666, 35281, 24465, 29833, 48019, 42891, 30132, 46830, 53982, 39142, 39327, 27818, 50381, 39342, 24733, 34776, 38532, 50637, 34969, 57991, 27066),

            "Tui" => array(30402, 51149, 38091, 50893, 20715, 33495, 38857, 26867, 37325, 54764, 53642, 52173, 51661, 51917, 19842, 38022, 17650, 33755, 21891, 37827, 28398, 27630, 27374, 32439, 19660, 51405, 20866, 40411, 48780),

            "Tun" => array(52685, 33519, 38108, 23256, 48610, 33783, 39147, 25736, 39364, 52941, 24828, 36340, 52429, 54762, 47345, 18581, 20118, 58011),

            "Tuo" => array(28402, 39164, 29432, 33788, 55245, 45455, 17653, 39410, 48886, 51701, 18109, 48282, 63368, 53965, 34512, 34033, 37528, 34289, 23496, 17868, 60147, 52634, 22715, 50917, 32478, 26090, 37328, 25011, 55757, 58259, 63639, 54989, 19449, 31478, 55528, 55501, 54754, 20660, 29590, 26823, 39888, 39635, 53709, 61851, 53197, 61317, 53453, 45528, 64154, 39152, 60289, 27798, 33007, 39383, 16781, 59355, 63136, 37086, 22769, 51437, 30186, 54733, 17395, 34292, 54221, 54477, 41689),

            "Uu" => array(18889, 34249, 21442, 41115, 35526, 46746, 46490, 38119, 17847, 18591, 28126, 24526, 17361, 27056, 23530, 17357, 18592, 35266, 59797, 30940, 29122, 37094, 50330, 65174, 34501, 19162, 24730, 49551, 36857, 30693, 39856, 29621, 21740, 34719, 52108, 32971, 26015, 18326, 51604),

            "Wa" => array(28924, 16795, 31996, 16539, 34196, 57293, 17592, 27293, 56525, 35219, 52892, 62680, 40159, 61675, 28114, 25581, 33005, 60550, 57549, 63365, 41133, 23475, 31371, 26052, 57037, 47759, 56013, 35511, 56269, 40070, 56460, 56781, 48772, 31918, 46310, 37815),

            "Wai" => array(57805, 33208, 52193, 37870, 58061, 45784, 46982),

            "Wan" => array(46487, 38549, 53981, 47847, 65255, 61133, 20414, 60365, 46574, 61901, 61595, 35477, 60621, 27031, 48776, 60877, 61389, 33219, 17585, 21950, 52370, 24051, 51420, 31687, 23795, 16602, 17602, 26312, 38617, 28294, 62413, 34533, 27364, 27867, 62157, 25733, 30358, 32906, 25989, 28381, 61836, 58829, 31618, 42638, 39857, 60146, 40335, 58317, 40861, 57560, 58573, 22477, 37620, 60809, 37348, 61171, 24193, 23539, 44432, 53129, 18313, 59341, 49810, 30652, 59853, 21676, 61645, 45982, 39384, 35512, 37087, 64998, 59597, 59085, 47580, 23684, 61839, 26002, 60109),

            "Wang" => array(22462, 23758, 29653, 34765, 40855, 31197, 33695, 65257, 64717, 64461, 21142, 39317, 64205, 64973, 52727, 36574, 24478, 45708, 62669, 63181, 51075, 62925, 46988, 46476, 46732, 17608, 52446, 43393, 37761, 59608, 46223, 63437, 47247, 63949, 30663, 45027, 24269, 63693),

            "Wei" => array(49052, 37280, 38601, 37276, 36064, 21438, 43982, 24236, 43214, 41441, 44189, 46820, 42702, 43470, 44238, 52705, 64135, 49798, 44686, 22483, 55788, 45518, 45262, 45774, 46030, 45006, 44494, 22982, 31109, 21484, 34277, 18590, 22497, 40425, 25845, 57504, 38043, 19632, 49132, 26870, 30620, 26259, 18323, 52368, 35487, 38600, 56471, 41678, 56029, 28299, 22411, 63902, 65229, 41934, 52185, 54501, 53894, 61914, 40682, 19608, 53484, 55259, 42190, 43726, 42958, 63712, 24461, 51171, 42446, 26614, 41422, 27598, 19135, 38356, 16851, 21902, 39159, 22176, 45534, 25997, 41700, 27856, 41873, 28622, 53920, 56735, 19885, 22465, 18383, 19445, 24278, 28624, 49102, 46542, 48590, 35783, 32179, 48846, 47566, 31115, 35465, 41887, 44258, 48334, 17874, 27376, 25514, 22427, 32211, 33491, 58330, 37318, 56985, 58087, 49625, 33158, 24284, 35031, 16871, 17886, 38859, 47822, 18412, 40439, 23260, 32471, 35568, 30412, 42730, 37822, 38088, 42389, 44002, 52880, 52879, 31916, 62704, 21428, 47336, 47860, 24260, 48525, 44750, 48795, 52114, 47334, 34003, 21959, 50138, 45189, 31895, 39309, 42370, 20430, 24495, 33990, 31981, 47054, 24047, 47310, 52628, 46798, 56310, 46286, 48078, 49358, 50057, 29933, 34517, 27885, 27850, 38334, 37004, 26059, 20974, 38885, 28405, 42115),

            "Wen" => array(51406, 26551, 32951, 51918, 33475, 55429, 51150, 55512, 23274, 28810, 60559, 51662, 22467, 24210, 21399, 40906, 17297, 47592, 45471, 35008, 46051, 38396, 36561, 16831, 38346, 47080, 35731, 26771, 20172, 31213, 23231, 40139, 38534, 34530, 40157, 39133, 28376, 39657, 38903, 37606, 37878, 33014, 30704, 49614, 30360, 22680, 25993, 23494, 50894, 36250, 25822, 36780, 55452, 50382, 43151, 23032, 38388, 25329, 33986, 27384, 40398, 21199, 38121, 36841, 34735, 43510, 31164, 50638, 51614, 49870, 20685, 54243, 40107, 50126),

            "Weng" => array(54747, 37058, 20474, 55428, 21642, 20221, 26342, 35534, 52430, 52174, 27899, 51085, 21129, 58780, 46046, 22958, 39616, 23730, 52686, 45717, 61149),

            "Wo" => array(32253, 48118, 40900, 20209, 34454, 48104, 30893, 53966, 42369, 61578, 60307, 54990, 49131, 20677, 54478, 53198, 17336, 43997, 53454, 52942, 62363, 27050, 53710, 28360, 44162, 56466, 54222, 64669, 20420, 22962, 59287, 24459, 41697, 54734),

            "Wu" => array(18322, 26262, 28644, 29437, 47606, 40680, 32141, 46828, 25259, 40885, 25595, 33205, 56050, 36810, 19961, 20141, 16556, 24775, 54154, 60895, 57550, 40603, 38342, 46308, 35061, 63991, 59618, 53474, 58594, 50149, 58574, 19093, 64741, 60366, 22401, 32506, 58830, 59342, 59854, 62936, 20192, 57294, 56526, 56782, 55758, 62878, 38839, 36228, 55246, 26518, 55515, 56014, 30351, 56270, 55502, 63962, 30688, 59526, 58318, 57038, 51077, 58062, 53893, 57806, 33782, 30182, 21658, 18389, 24533, 39353, 36088, 36814, 60110, 22402, 31931, 39568, 16863, 61134, 18155, 51692, 62158, 37520, 60815, 20114, 61390, 19123, 62414, 32236, 61670, 51446, 52720, 20664, 23794, 18170, 24789, 48543, 52877, 22154, 55196, 60878, 48101, 58508, 60812, 51871, 37779, 18868, 50416, 59598, 45185, 23945, 41131, 59086, 38786, 38278, 54666, 62954, 45963, 37036, 21647, 21212, 61646, 61902, 60622, 24313, 41944, 36509, 22446, 29157, 37777, 36995, 61080),

            "Xi" => array(30913, 28865, 55263, 49285, 59122, 17620, 55948, 36240, 49567, 62926, 43215, 32408, 53977, 27582, 57842, 64462, 18160, 26584, 20437, 64974, 22985, 47348, 29152, 38849, 58100, 53748, 30597, 50829, 43760, 39839, 43727, 53391, 29063, 50315, 44275, 18648, 38836, 29106, 55200, 27864, 35288, 16599, 21753, 38645, 18368, 20384, 52212, 17540, 42447, 36015, 53990, 55529, 59800, 20408, 59551, 59295, 58604, 41423, 38577, 22928, 44507, 47503, 24706, 23491, 40176, 61919, 33941, 41679, 51852, 51678, 46833, 63950, 63438, 33490, 43983, 58073, 42703, 64718, 41935, 63182, 62670, 27525, 22162, 58266, 48100, 21218, 56706, 21722, 63694, 20140, 42640, 64206, 44239, 31135, 28063, 37269, 24479, 22687, 42191, 35974, 25287, 65230, 42959, 20119, 43471, 27804, 49380, 42220, 32451, 46581, 61327, 20368, 48866, 46543, 49548, 47311, 21378, 39612, 34240, 21472, 24464, 47055, 25477, 30143, 27862, 47241, 64492, 23962, 27599, 37595, 23429, 26844, 24311, 29869, 19938, 18825, 24572, 36532, 17107, 37834, 49309, 29168, 48519, 31939, 31683, 25040, 21996, 38301, 38045, 63632, 46799, 27098, 52375, 63980, 38077, 52384, 48287, 19435, 22234, 21401, 51861, 27337, 29897, 45519, 60138, 44751, 60813, 25757, 62682, 16587, 30426, 41170, 38337, 45007, 30880, 16609, 55530, 25742, 24299, 64503, 20688, 17888, 45263, 34024, 41210, 44495, 35046, 31970, 57309, 32200, 45775, 61413, 21405, 33681, 33425, 35555, 64477, 46031, 62695, 30706, 26095, 40695, 18924, 34034, 30162, 46287, 41110, 20211, 24295, 16631),

            "Xia" => array(44257, 49615, 39882, 17855, 23487, 23002, 37605, 41204, 48591, 29381, 56037, 34995, 48847, 42728, 22452, 25785, 48335, 24550, 33175, 50383, 19634, 45969, 24039, 49651, 19375, 22920, 26866, 61431, 21754, 49871, 50639, 49308, 17025, 47567, 20719, 31222, 48079, 49359, 36767, 44948, 20655, 39146, 47823, 17112, 27113, 62177, 53890, 52461, 38059, 36545, 25218, 31685, 19882, 33973, 55710, 33770, 65182, 49103, 31629),

            "Xian" => array(49904, 26089, 32973, 61424, 20910, 38371, 47499, 42374, 47243, 27344, 54223, 56970, 53711, 37009, 52431, 42642, 27331, 46566, 28877, 53199, 19645, 19851, 52943, 54735, 64993, 62366, 49306, 33165, 24723, 24794, 47602, 52687, 29867, 37866, 16810, 39674, 17072, 29913, 29909, 48541, 18352, 21941, 37626, 37370, 30440, 17626, 52627, 52468, 30918, 27062, 60652, 45035, 40598, 56051, 41973, 53749, 50895, 34987, 64655, 55681, 36060, 40637, 37627, 41141, 51663, 39297, 52175, 26762, 51407, 56716, 51151, 19843, 20218, 24023, 24719, 40923, 24028, 33015, 34954, 53455, 64389, 49537, 19953, 29429, 57317, 51919, 19079, 28035, 34029, 40081, 34541, 17618, 36287, 30437, 53967, 54479, 35264, 28093, 56271, 55247, 30657, 39099, 38321, 56015, 53898, 40840, 29581, 33173, 18092, 56783, 55759, 26499, 28318, 18428, 16581, 17917, 44940, 45196, 21208, 26815, 20926, 28291, 24277, 51347, 38801, 32958, 23174, 32228, 53902, 34798, 26516, 52377, 20139, 23756, 33509, 47838, 37305, 39117, 35050, 19854, 40362, 24813, 40618, 31635, 24773, 16623, 26801, 43914, 56527, 57295, 57039, 55503, 44513, 54991, 46750, 59885),

            "Xiang" => array(31933, 59599, 59855, 55702, 57217, 24823, 38100, 60111, 54498, 19187, 50146, 16880, 60367, 58063, 57334, 48007, 53239, 32149, 60879, 35201, 60623, 19149, 19419, 64398, 58319, 24544, 57807, 27872, 57551, 48348, 34511, 38904, 26305, 59343, 28128, 59087, 36292, 58831, 63718, 37371, 31934, 58575, 48615, 55773, 21912, 18379, 36269, 30944, 37872, 61647, 61837, 57988, 61903, 35824, 22226, 37357, 40181, 20727, 44531, 38893, 32231, 31479, 41610, 26056, 62159, 61391, 61135, 37312, 25077, 62415, 37803),

            "Xiao" => array(17616, 58355, 24315, 56799, 61854, 29113, 54421, 64463, 29434, 36300, 60063, 53477, 24223, 49812, 26031, 23509, 26799, 65231, 37546, 62671, 39573, 28311, 22186, 27386, 60298, 55519, 46040, 48286, 48542, 51688, 38130, 44698, 49028, 43419, 63695, 27266, 17542, 34764, 42394, 20610, 42960, 64719, 21434, 59790, 31888, 28300, 41680, 30195, 42192, 54760, 59366, 50068, 34480, 58754, 36282, 64975, 20196, 29854, 63183, 30415, 38058, 63644, 61427, 44180, 24199, 29141, 42704, 38543, 50657, 32186, 21455, 24015, 41936, 37880, 52637, 31736, 37578, 34244, 52471, 63951, 57243, 60644, 42448, 21146, 28403, 41424, 17287, 35284, 39863, 62927, 64207, 34739),

            "Xie" => array(18876, 46800, 43675, 23243, 26245, 26249, 50306, 51869, 51087, 17894, 48021, 45022, 46544, 39677, 37071, 46288, 50907, 30141, 54412, 31124, 37079, 45264, 45776, 48336, 64916, 44496, 58085, 56802, 27789, 54247, 29134, 44240, 39358, 64403, 50395, 41695, 17366, 22688, 18664, 35518, 28882, 20717, 47312, 22676, 28356, 48031, 51673, 45520, 46032, 32464, 37010, 59011, 26000, 27072, 38593, 32940, 37565, 45008, 61328, 57478, 51340, 38280, 48080, 47824, 44261, 62681, 37869, 42134, 57502, 47568, 27781, 43472, 49290, 46210, 34285, 49822, 47056, 25806, 62453, 28085, 32977, 49129, 42471, 22717, 57758, 37583, 33671, 24317, 19453, 29323, 50305, 31136, 60041, 43984, 35776, 37260, 51177, 30934, 40124, 25526, 43728, 17362, 24990, 43216, 34507),

            "Xin" => array(57570, 25578, 49616, 38111, 48848, 47504, 32925, 42124, 20977, 19924, 50128, 37782, 29314, 50896, 24241, 34535, 36743, 49025, 50640, 32913, 50384, 31882, 49104, 34273, 48592, 25797, 45276, 26565, 54430, 52982, 42988, 23780, 31647, 33430, 49360, 55179, 22482, 49872, 46808),

            "Xing" => array(30636, 51408, 29139, 51664, 36301, 40633, 40584, 51152, 52176, 24534, 38027, 61084, 22003, 65244, 51920, 37791, 24054, 39400, 30675, 28643, 19890, 56213, 53712, 52432, 53456, 21493, 53200, 52944, 20870, 52688, 51338, 39323, 43487, 54224, 35760, 53968, 28359, 34434, 54480, 18674, 62684, 30899, 54736, 61835, 17093, 28094, 60315, 64650, 44259, 59777, 21201),

            "Xiong" => array(46211, 54992, 29379, 55760, 40660, 47836, 59785, 56272, 55248, 55504, 19412, 64143, 56016, 39895, 47252, 30676, 29328, 25749, 56528, 40151, 45211),

            "Xiu" => array(57040, 20156, 46817, 58832, 35755, 57035, 58320, 29167, 30965, 25474, 21734, 56311, 56784, 41208, 32240, 57552, 36797, 30406, 44253, 39398, 64156, 62110, 34257, 20708, 24261, 48368, 51938, 54242, 37070, 37055, 63477, 19965, 28391, 22247, 34291, 17344, 20653, 34001, 19628, 48280, 57296, 58576, 33731, 58348, 58064, 38627, 57808),

            "Xu" => array(61136, 37034, 23513, 22199, 29597, 30654, 16830, 20145, 34205, 22450, 34242, 35060, 32470, 45456, 22160, 19868, 32897, 42998, 44417, 21190, 24262, 30898, 30411, 34251, 28096, 41950, 29431, 31678, 39828, 23450, 18623, 36042, 39637, 49547, 59088, 20663, 59600, 29172, 40662, 31476, 48346, 56195, 62184, 37002, 60880, 23508, 20724, 60624, 60112, 40173, 63641, 58353, 60368, 37587, 60653, 19631, 33485, 59344, 17045, 61415, 37068, 39661, 60567, 41143, 37836, 44430, 59856, 41175, 32907, 36267, 37106, 38827, 54404, 41620, 60830, 48002, 43748, 42632, 16794, 21663, 63440, 64917, 54244, 62928, 63184, 55689, 63696, 61392, 50310, 62672, 32410, 45045, 28347, 61904, 50561, 56052, 34528, 38300, 41109, 33492, 62160, 21425, 21659, 21915, 62081, 61648),

            "Xuan" => array(21163, 36849, 44516, 26320, 19372, 59374, 33520, 39910, 52706, 37567, 56301, 17379, 40656, 21194, 57583, 19418, 47337, 22767, 27581, 33215, 17304, 55012, 21938, 52112, 27787, 53392, 19942, 59101, 61406, 18569, 64208, 64464, 21141, 29845, 52954, 17394, 27592, 22742, 31689, 30124, 55513, 20662, 41937, 36537, 54252, 40650, 40405, 26830, 53738, 16834, 36786, 18822, 26009, 30381, 45032, 50069, 63952, 63204, 53905, 41425, 50668, 42193, 23957, 21136, 41681, 24496, 38349, 40843, 20930, 65232, 32502, 22743, 21708, 36303, 59376, 64720, 34191, 39885, 17100, 64976),

            "Xue" => array(43729, 19703, 64672, 31134, 64414, 63894, 28630, 38597, 50324, 43217, 27777, 42961, 20109, 64140, 23021, 27358, 21679, 63439, 18633, 42449, 42705, 35782, 31112, 19360, 56728, 46317, 39930, 43473, 31467, 24827, 18318, 43255, 32196, 18398, 36816),

            "Xun" => array(47349, 52105, 20940, 28576, 25536, 44753, 45009, 48865, 45540, 26774, 45521, 45265, 45777, 29372, 47582, 24457, 44241, 49137, 55172, 28601, 24456, 43985, 63451, 19130, 60292, 55018, 24736, 40388, 46729, 41095, 60548, 24779, 36790, 34482, 41373, 18090, 57313, 39390, 47057, 46033, 63452, 63873, 46801, 48769, 46289, 47313, 36307, 38611, 39662, 25991, 21224, 41919, 29391, 25305, 62608, 40147, 58329, 42650, 25823, 46545, 20874, 23281, 19859, 30624, 35296, 57590, 44497, 50562, 24453, 17559, 48538, 37291, 30855, 33748, 21495, 21165, 31183, 16544, 61855, 23799, 36244, 57240),

            "Ya" => array(45700, 19592, 51153, 51409, 26027, 49893, 60320, 35786, 33234, 20893, 44006, 50897, 31877, 59888, 23805, 50641, 56974, 31663, 38582, 50129, 47583, 17848, 50587, 37509, 34542, 58007, 17032, 31170, 45803, 28546, 48365, 18827, 41171, 58778, 60382, 42386, 59794, 21388, 48337, 22754, 39912, 26360, 34552, 17893, 58088, 47825, 65005, 48849, 40066, 47569, 18429, 57998, 48593, 47753, 48081, 56200, 49617, 36536, 36493, 34988, 29689, 50385, 61671, 49873, 62424, 49361, 36071, 49105, 33669, 37270),

            "Yan" => array(59601, 39658, 57297, 52614, 52716, 36531, 24490, 26527, 59089, 39675, 52458, 45194, 58065, 58833, 35528, 43407, 58577, 59345, 43394, 59857, 36306, 57041, 28156, 61599, 52696, 26100, 22230, 57553, 45728, 57493, 32251, 45703, 63371, 23026, 22258, 40416, 26104, 53495, 23941, 34441, 18680, 55780, 45785, 46741, 52383, 56794, 51083, 16607, 42741, 58321, 25853, 17387, 58263, 61657, 64743, 33180, 39603, 48110, 61073, 27086, 35537, 56785, 28033, 31644, 42647, 56017, 51672, 18118, 55761, 56273, 45531, 17633, 21139, 65169, 56720, 45197, 51959, 51417, 62357, 31988, 29838, 17149, 23186, 64247, 56529, 31370, 57809, 29692, 31485, 27644, 45187, 38297, 25852, 29887, 31196, 31623, 39045, 23470, 36093, 26364, 40697, 28662, 24531, 20650, 42458, 27132, 53891, 54225, 50915, 17861, 45457, 56472, 63117, 36585, 59787, 25530, 53201, 64485, 18912, 55249, 46730, 54410, 53457, 55505, 22165, 48860, 54481, 34259, 53969, 30365, 52454, 51921, 34813, 64482, 35204, 52433, 28138, 30444, 34714, 48259, 52440, 42724, 46059, 35499, 55787, 52964, 52177, 17027, 40863, 46043, 52957, 51665, 24061, 47490, 50145, 52689, 29383, 55178, 47006, 38871, 18163, 35297, 41118, 22232, 22488, 29326, 29582, 30350, 47518, 18374, 36602, 24826, 42398, 31474, 26805, 33500, 18906, 33747, 40690, 37104, 32993, 34263, 17804, 52361, 25481, 53713, 17299, 61591, 40404, 56307, 48269, 19116, 52945, 20692, 23273, 54993, 20148, 17098, 49545, 27022, 39354, 49049, 49287, 33262, 39628, 37097, 40665, 38789, 54737),

            "Yang" => array(39915, 33265, 18826, 29832, 54913, 63185, 63372, 63697, 63441, 62929, 59038, 18171, 21228, 21974, 44191, 61079, 36061, 37093, 30198, 31719, 24303, 60034, 17560, 63953, 42733, 45974, 62434, 27585, 26836, 54168, 64209, 38040, 21429, 22448, 59290, 64400, 18909, 31169, 17136, 22942, 24980, 50321, 43669, 17597, 32229, 45559, 34795, 23267, 34040, 61393, 62673, 26602, 62161, 60625, 60881, 29842, 39562, 62341, 44692, 62435, 28353, 27313, 28611, 60113, 17557, 60369, 51436, 62417, 23445, 36011, 34993, 54770, 42893, 38634, 57569, 20627, 48876, 61137, 38024, 61905, 61649, 29423, 38632),

            "Yao" => array(59280, 59105, 30099, 41426, 33931, 62088, 59266, 29354, 26003, 42450, 55942, 27800, 17294, 42194, 16782, 40943, 30191, 65233, 41938, 49555, 44181, 36524, 25311, 64465, 28341, 16596, 47750, 16585, 38038, 64977, 50365, 20880, 29098, 47839, 60055, 64721, 42706, 27021, 30850, 63390, 37000, 51435, 62620, 55695, 41682, 47244, 62183, 29876, 35280, 43730, 39607, 20409, 39368, 43474, 36535, 26008, 31945, 39401, 23538, 28669, 28628, 50847, 24570, 43986, 35543, 33000, 49108, 60053, 34738, 35308, 52976, 25035, 55274, 51356, 40402, 24559, 25574, 27084, 44773, 36598, 31958, 31702, 51937, 18616, 20720, 60916, 24972, 42487, 47857, 37047, 43218, 46722, 20875, 42962, 52374, 31898, 50152, 60300, 64160, 30662),

            "Ye" => array(16532, 61087, 21402, 18830, 53397, 37600, 30642, 34736, 30432, 52186, 19086, 47314, 41609, 18840, 28803, 16625, 53141, 17139, 30713, 30448, 17077, 17915, 26620, 42143, 47826, 31648, 19348, 23024, 24022, 39303, 19604, 31922, 58005, 54941, 31204, 62702, 57054, 49298, 38048, 21990, 48517, 46290, 18836, 44754, 45010, 44242, 50658, 20208, 41621, 44498, 19152, 41885, 34945, 45778, 42390, 35713, 45522, 50578, 51946, 51180, 42646, 46034, 47570, 45266, 47058, 44425, 46546, 47240, 46802, 25501),

            "Yen" => array(59532, 36036),

            "Yi" => array(61175, 39065, 24018, 61843, 57496, 52946, 43415, 38037, 42900, 34202, 39324, 39130, 28116, 31903, 25579, 20194, 21716, 24264, 61138, 21972, 23512, 56786, 23768, 31458, 24819, 34004, 24785, 57810, 58244, 40331, 40349, 23960, 19855, 57042, 52199, 58066, 53123, 31617, 59346, 32426, 30392, 28079, 46321, 37038, 38542, 38286, 51422, 50398, 46747, 57588, 57298, 28843, 22658, 58598, 36246, 55250, 63714, 52126, 26806, 59602, 61394, 31440, 27270, 54916, 35818, 38872, 64731, 36752, 41370, 38544, 60114, 39632, 56030, 43235, 41864, 58774, 61846, 59090, 52891, 63984, 27332, 34022, 37849, 34763, 61167, 22720, 18422, 19180, 29656, 33995, 45041, 22432, 19104, 25498, 59636, 60882, 35544, 56530, 33017, 33273, 16883, 32466, 45788, 34298, 35020, 32509, 38103, 40186, 26618, 24314, 23500, 35742, 35833, 26583, 26839, 20456, 53895, 27289, 55701, 30933, 36527, 59807, 55279, 27643, 59096, 24060, 28667, 54943, 56044, 27633, 35052, 39625, 31875, 52371, 58322, 44952, 18824, 52875, 20415, 27319, 26034, 37573, 45790, 38284, 40142, 38575, 17568, 39825, 18062, 55947, 43921, 52117, 56221, 60649, 16528, 64921, 29072, 33423, 23437, 48097, 56810, 33678, 26764, 38622, 52434, 29904, 25228, 56963, 50386, 51922, 61057, 63970, 52178, 64657, 55446, 57495, 40341, 50642, 17627, 39917, 30851, 51666, 50130, 20441, 34509, 60144, 65012, 51410, 50898, 21960, 29377, 55191, 56795, 18053, 42395, 57055, 29877, 35502, 25568, 48850, 48338, 49106, 49362, 53897, 30430, 28559, 48082, 49905, 49618, 48594, 49874, 32461, 17078, 29921, 44442, 36761, 61687, 25303, 51154, 29690, 35007, 28923, 18103, 62692, 41355, 40675, 49803, 17325, 57225, 56223, 16814, 54738, 58578, 55256, 63876, 17859, 45441, 57554, 59858, 44767, 56018, 17845, 32153, 38350, 40133, 35310, 58834, 21726, 55762, 60626, 60370, 27078, 27586, 55506, 43993, 35210, 58757, 28822, 63125, 46980, 51841, 20166, 19342, 24712, 54994, 56274, 47508, 48607, 32467, 19131, 18151, 16635, 53970, 50926, 54482, 53714, 42383, 52690, 42127, 41871, 32221, 21998, 22254, 28090, 38540, 36756, 31726, 43405, 50050, 38072, 29410, 27107, 48620, 54226, 17400, 64913, 61076, 53458, 45044, 58766, 29126, 53202, 54236, 37089),

            "Yin" => array(32948, 40638, 20182, 37100, 40931, 25034, 38635, 39605, 56988, 19913, 16529, 35503, 60576, 54676, 63442, 36507, 20634, 62599, 56451, 37101, 37255, 16542, 40681, 41195, 38897, 35464, 63186, 61569, 61650, 61906, 62674, 62930, 26346, 62622, 23937, 57479, 62162, 21491, 61590, 42972, 46048, 16779, 54928, 20153, 38122, 63470, 62418, 63619, 34486, 20689, 29629, 31885, 65181, 23694, 23531, 20687, 54169, 36311, 25008, 44017, 24985, 19691, 35823, 33516, 34799, 31194, 16534, 41427, 57820, 33169, 17840, 26613, 46737, 37529, 65249, 23697, 21473, 47064, 40347, 42120, 39580, 19087, 23210, 27106, 25036, 18612, 63698, 63954, 46299, 47586, 40403, 24522, 40845, 38285, 23239, 33723, 38867, 24220, 64210, 18571, 31445, 30690, 64978, 64722, 33274, 31203, 65234, 48882, 64466, 45046, 51419, 37530, 30599, 33689, 19373, 43143),

            "Ying" => array(42195, 54681, 41374, 27531, 33950, 35279, 30110, 27579, 44517, 25049, 16819, 16858, 57744, 44446, 22971, 63133, 19667, 44264, 28875, 19614, 32924, 40834, 44755, 41939, 30612, 39851, 27796, 62877, 16535, 47837, 16873, 30910, 31684, 45779, 41877, 24752, 46035, 20398, 64734, 40654, 20916, 63719, 38559, 18391, 54240, 36327, 20630, 45715, 45267, 45523, 49139, 30615, 41970, 32157, 43249, 24463, 34496, 26510, 42963, 26295, 29646, 54150, 24501, 29655, 35757, 53657, 19903, 25548, 19706, 24040, 60047, 34268, 35066, 20176, 29888, 42707, 28098, 35230, 36077, 23214, 57314, 43665, 53488, 60299, 35576, 42451, 23436, 29844, 64907, 49799, 17658, 38906, 39872, 47849, 57060, 19593, 20355, 49564, 29896, 60388, 38080, 31879, 63705, 33998, 37804, 19451, 44243, 48028, 63197, 40880, 41683, 58332, 45011, 22523, 43987, 44499, 54237, 30669, 43731, 43475, 43219, 39633),

            "Yo" => array(41440, 46291, 53638),

            "Yong" => array(34695, 53661, 57071, 60819, 25056, 44023, 25231, 22244, 40094, 20455, 19888, 29931, 47059, 46547, 47571, 56966, 57319, 47315, 54263, 46803, 31712, 47827, 19357, 40856, 48355, 41867, 44508, 40096, 27827, 44431, 62096, 48339, 54157, 19849, 54160, 42396, 33236, 64144, 18614, 27617, 18935, 19401, 28614, 50131, 37367, 30939, 38901, 48784, 48083, 34030, 49363, 48595, 19183, 45024, 25264, 30970, 49619, 23440, 37110, 44168, 32400, 47766, 49107, 51844, 54422, 48851, 49875, 47321),

            "You" => array(34243, 30146, 26561, 22679, 61678, 39349, 61070, 40141, 17124, 45468, 54425, 35039, 53715, 20469, 37597, 48107, 53459, 60310, 53203, 26822, 54744, 19073, 26817, 35969, 38110, 25990, 54739, 30389, 26253, 40180, 31448, 63735, 21717, 21217, 54483, 46821, 46474, 54227, 55251, 53971, 54995, 42969, 19852, 62432, 20102, 28348, 64416, 43168, 30902, 27840, 41625, 22686, 51601, 27074, 51411, 51923, 52435, 22939, 51667, 42631, 39904, 53215, 64728, 51155, 50643, 50387, 50899, 40579, 28305, 18589, 32507, 52691, 21955, 16792, 53238, 23519, 52947, 57577, 39394, 32458, 26353, 27357, 34551, 30619, 19423, 29325, 46557, 57584, 55016, 19856, 40158, 52179, 18900, 63218, 50418, 47746),

            "Yu" => array(49566, 31199, 35206, 55763, 18381, 31978, 35767, 52125, 20149, 17841, 26810, 23800, 31671, 58835, 35064, 32222, 25541, 37865, 23525, 33784, 34296, 21174, 39626, 56300, 55507, 17083, 62960, 19376, 64159, 63216, 31417, 56275, 29648, 24491, 21943, 41964, 23979, 58323, 57811, 30167, 22750, 44760, 28551, 27281, 21650, 39369, 31984, 42452, 51353, 24804, 20473, 41162, 56019, 24012, 42470, 57555, 36575, 59603, 39860, 61069, 61395, 62688, 60883, 20161, 42898, 26313, 17335, 32949, 16878, 55266, 63200, 20613, 42626, 46809, 21122, 65235, 17403, 30410, 32250, 27126, 60371, 61912, 63900, 60115, 61651, 60627, 61139, 41108, 26848, 36000, 19663, 28077, 26010, 47774, 39901, 37861, 33525, 63892, 27635, 60817, 18613, 17619, 50333, 53228, 53652, 34444, 63618, 26824, 62962, 58775, 29356, 46481, 58507, 27627, 39125, 40935, 50419, 47238, 42903, 62163, 54920, 21916, 64467, 32415, 42196, 63187, 24499, 41940, 56046, 23212, 16593, 20191, 39319, 39575, 63955, 31937, 25844, 63374, 41684, 45958, 53475, 51590, 63443, 22155, 41428, 63699, 20684, 34811, 61907, 49648, 42708, 52116, 34264, 64211, 23253, 49649, 35207, 23182, 62931, 21384, 50666, 43663, 64723, 29366, 29058, 34031, 62675, 62419, 45805, 49378, 64979, 21489, 25588, 30106, 32500, 59528, 59347, 51165, 26845, 23227, 61320, 41869, 58579, 17358, 20215, 52961, 46989, 59091, 17377, 21739, 51850, 21447, 40134, 43252, 19948, 55434, 50394, 36850, 64737, 58521, 59859, 19352, 20475, 42216, 33989, 41632, 20890, 56531, 56787, 60650, 57299, 47576, 34524, 18866, 20381, 62361, 16536, 22262, 34483, 36270, 26098, 40860, 29630, 59883, 57043, 31402, 24307, 33199, 58067, 38370, 63453),

            "Yuan" => array(30968, 62859, 29945, 29425, 20942, 43996, 45296, 21496, 38046, 36092, 16520, 48630, 33762, 30084, 43732, 37116, 16776, 43220, 58503, 46804, 23729, 26012, 39301, 42391, 41209, 19962, 26520, 30890, 25801, 26847, 34187, 26619, 46292, 21215, 46036, 50844, 46548, 27306, 49894, 37592, 40629, 44500, 54146, 47572, 47828, 25552, 47316, 27345, 35566, 43988, 31382, 34183, 37841, 34513, 48363, 21638, 58595, 20419, 20442, 34442, 64391, 44756, 17899, 44700, 38623, 19169, 45780, 45524, 45268, 37048, 44244, 47060, 35973, 31730, 37003, 16606, 34278, 31438, 28110, 16841, 30604, 62445, 56041, 28060, 46233, 18111, 35262, 45012, 32449, 20939, 42964, 29336, 30972, 41715, 22940, 24988, 43476, 34783),

            "Yue" => array(23438, 26795, 49364, 19898, 30864, 33424, 42639, 26572, 25019, 20219, 27835, 62869, 20941, 32416, 24246, 39933, 22267, 17843, 17339, 35804, 50132, 48340, 21197, 57305, 27317, 38106, 39867, 57489, 22755, 53481, 24546, 49620, 48875, 48596, 57838, 48852, 34537, 60811, 49876, 24722, 42895, 59788, 48084, 54674, 34793, 50388),

            "Yun" => array(49552, 52180, 23236, 40597, 23775, 53460, 43483, 52692, 27361, 36333, 29421, 31229, 27104, 25825, 52436, 53204, 41699, 52948, 34009, 38806, 51668, 46571, 54405, 59271, 58512, 56732, 54914, 51412, 59546, 27849, 48001, 30090, 34283, 22171, 28342, 41447, 49116, 27794, 51156, 31200, 50644, 35772, 59803, 49823, 47005, 59113, 23751, 49386, 61921, 17353, 48518, 17132, 28852, 25073, 35994, 25746, 20937, 25023, 50900, 63640, 31946, 18880, 51924, 48799, 16522, 23434, 26350, 29181),

            "Za" => array(20195, 53972, 54228, 20165, 18629, 27371, 21458, 42709, 31723, 29675, 47494, 35053, 50911, 26011, 39356, 53716, 27291, 55774, 35214, 64918, 37564),

            "Zai" => array(56020, 55764, 52449, 25821, 17554, 26303, 55508, 33923, 20705, 61058, 37531, 53463, 54740, 54484, 54996, 50334, 55252, 64670, 57063, 20658, 36807, 54940, 34521, 34204),

            "Zan" => array(39392, 33197, 51702, 28121, 21395, 40409, 57044, 38384, 37847, 47765, 24758, 37293, 46824, 31703, 23015, 44419, 34791, 56788, 37050, 41716, 45955, 55540, 52354, 56276, 56532, 36570, 39811, 62964, 30348, 50154),

            "Zang" => array(57556, 28303, 51934, 23177, 57812, 31473, 41156, 20964, 24537, 57300, 39328, 57574, 27353, 19397, 20186, 30451, 17882),

            "Zao" => array(59860, 59604, 38807, 27595, 53910, 58836, 25261, 29665, 39899, 58324, 58068, 61140, 58580, 59348, 36840, 59092, 60628, 22968, 61396, 22999, 35802, 24248, 60116, 29370, 60372, 29318, 60884, 61663, 24471, 33221, 22161, 28592),

            "Ze" => array(24829, 40920, 47092, 53491, 62943, 55964, 40626, 49560, 27338, 58867, 19335, 29828, 50661, 27538, 62164, 49281, 43142, 26523, 61908, 61652, 62420, 31387, 29850, 54232, 22421, 48874, 62106, 55694, 48786, 41357, 36591, 55514, 34518, 31191, 63369, 50904, 25794, 27322, 25522, 33712, 40884, 35286, 17147, 36815, 37337, 31176),

            "Zei" => array(36047, 26103, 26358, 36087, 62676, 23769),

            "Zen" => array(55175, 21975, 62932),

            "Zeng" => array(63188, 63444, 35808, 34953, 64405, 58783, 20909, 46570, 31716, 63956, 39897, 27124, 17342, 44527, 17587, 24567, 36020, 49390, 40918),

            "Zha" => array(62935, 62690, 41888, 31451, 36855, 32914, 22517, 32501, 34807, 41941, 36581, 20951, 32389, 31430, 42965, 43477, 37523, 43923, 42453, 28129, 28884, 50930, 58847, 43221, 28556, 58608, 41429, 50413, 64468, 27853, 60126, 64724, 53660, 61151, 48278, 47327, 33246, 29586, 40850, 40580, 48258, 64980, 65236, 41685, 38320, 20477, 64212, 34489, 16855, 53144, 65271),

            "Zhai" => array(44245, 21501, 44501, 21475, 44757, 31384, 58249, 31163, 52973, 50834, 43989, 51348, 43733, 45013, 31365, 63874, 28306),

            "Zhan" => array(48597, 48341, 48085, 17303, 48853, 23777, 19377, 22444, 55444, 63710, 46978, 20975, 46731, 38343, 40140, 39884, 20435, 19166, 38642, 47829, 61585, 30173, 49109, 47317, 59793, 24766, 63629, 49365, 47573, 45781, 27354, 28393, 57050, 33247, 21963, 44176, 29901, 45525, 46293, 47596, 61078, 46037, 38379, 54938, 17659, 32244, 38615, 46805, 29679, 41202, 36080, 45269, 55450, 29435, 63124, 25815, 46549),

            "Zhang" => array(45288, 17810, 51669, 51925, 51413, 52693, 38375, 39092, 61083, 50901, 29085, 51086, 52181, 30651, 32473, 37807, 52949, 25778, 42209, 55009, 42126, 28591, 53205, 31369, 51157, 52437, 50133, 20625, 50389, 45026, 53734, 60376, 50645, 34959, 49877, 16515, 41147, 46555, 34546, 25319, 19191, 38651, 40905, 23792, 45043, 49301, 49621, 27871),

            "Zhao" => array(16835, 60820, 65256, 37568, 38550, 51699, 36232, 54485, 17578, 29908, 22944, 33202, 36742, 45018, 24257, 26101, 55189, 54997, 55509, 17603, 54741, 40364, 56734, 16561, 37857, 53461, 33422, 55253, 51438, 33930, 17635, 53717, 55765, 42711, 29169, 53973, 54229, 39397, 36256),

            "Zhe" => array(34037, 18654, 30930, 38358, 50647, 34007, 30458, 57045, 21967, 44167, 57813, 63622, 29917, 52888, 53744, 19100, 58325, 57557, 63476, 58069, 53224, 57301, 41862, 31130, 22963, 29115, 17869, 56021, 43915, 22223, 47856, 40605, 55538, 56533, 45960, 46214, 56789, 32980, 28125, 64745, 34709, 33979, 34448, 34453, 56813, 28922, 61146, 26001),

            "Zhen" => array(23764, 39122, 24017, 18141, 29918, 27327, 32241, 36747, 23240, 29378, 24469, 33167, 43658, 60885, 54251, 62697, 37072, 28849, 61141, 46062, 18932, 33728, 46228, 41430, 33981, 19603, 26581, 25561, 25592, 61653, 62165, 35812, 24713, 58090, 45808, 34794, 39314, 29330, 61909, 57067, 34737, 34236, 58856, 62421, 55958, 40596, 51586, 39137, 62956, 18913, 31372, 36499, 23263, 40348, 59605, 59093, 58581, 40590, 33451, 37336, 60629, 61397, 60117, 55190, 60373, 58837, 30641, 26597, 40925, 59861, 51084, 39837, 17816, 28107, 55453, 59288, 18358, 31223, 27628, 40162, 21193, 40373, 48105, 32938, 37292, 59349, 35738),

            "Zheng" => array(25258, 60050, 63189, 29890, 53647, 56819, 28555, 41967, 41137, 63701, 63445, 64213, 37514, 52609, 62677, 63957, 36512, 49121, 56302, 38029, 27569, 16799, 62933, 55966, 39053, 24201, 24803, 41686, 41942, 47834, 42198, 44174, 24276, 17367, 19076, 26616, 35541, 36320, 64981, 65237, 20666, 22960, 64469, 16628, 20709, 25490, 29915, 37781, 61840, 32441, 64725, 27836),

            "Zhi" => array(41881, 31443, 32173, 29682, 36594, 21976, 38873, 26088, 22492, 21720, 22965, 47062, 22470, 48854, 62709, 49622, 50833, 42485, 36043, 50902, 32904, 51926, 26242, 50646, 52182, 52950, 63968, 50390, 21725, 47830, 34758, 60389, 25744, 60908, 50908, 25243, 48598, 47318, 55272, 22447, 35004, 19156, 23964, 62185, 40091, 21939, 59022, 59534, 38332, 37825, 39120, 53206, 34998, 25002, 52438, 25811, 41176, 52694, 60400, 52978, 51158, 59877, 40168, 43661, 33943, 49366, 48271, 49110, 31125, 52618, 30645, 52968, 45467, 58600, 20394, 63977, 49282, 50063, 57066, 38864, 51414, 49878, 17819, 36494, 53399, 30611, 16822, 59281, 25751, 32438, 44246, 40381, 30104, 30156, 32508, 46294, 38847, 37112, 43478, 32214, 34229, 21935, 42454, 33166, 42710, 44502, 46296, 44758, 42966, 43734, 45014, 29110, 33232, 30082, 28598, 55784, 43990, 49039, 46806, 28808, 25807, 38363, 33244, 31679, 35012, 23197, 56565, 21980, 47842, 48342, 28394, 24200, 46724, 19844, 47574, 48086, 49291, 25585, 28866, 39393, 64219, 46550, 36482, 45526, 43402, 52360, 45270, 50677, 32393, 64990, 60148, 38325, 45782, 46038, 61414, 27346, 40658, 40630, 17551, 51670, 31961, 38808, 34461, 30161, 34787, 50062, 41974, 22455, 63979, 56479, 46227, 60828, 28817, 16617, 18901, 49553, 45465, 44164, 35825, 21396, 30456, 26077, 23787, 16575, 26041, 50134, 20187, 55797, 27620, 23710, 62100, 40067),

            "Zhong" => array(29834, 56022, 23492, 36511, 32431, 57589, 55766, 35505, 22457, 23760, 16854, 28826, 26507, 64136, 31696, 55510, 23757, 41158, 61600, 22153, 45206, 54742, 30928, 54230, 19389, 54486, 45556, 50846, 53974, 20379, 43905, 53462, 25732, 29066, 35294, 45967, 31714, 53718, 41946, 41166, 39420, 48012, 21222, 33528, 44787, 54998, 55254, 35559, 22474, 47758, 25275, 61935),

            "Zhou" => array(49626, 57814, 39409, 55533, 33209, 18610, 17142, 64486, 50817, 36501, 18120, 37867, 58070, 58326, 19119, 21469, 20954, 57046, 60318, 63134, 35243, 36053, 42740, 56790, 56278, 57302, 64129, 25310, 22752, 57558, 25565, 31715, 27609, 46470, 57989, 50575, 17075, 19679, 29149, 56534, 39344, 29937, 30083, 19630, 46836, 27604, 20155, 17907, 53483, 59094, 59606, 20923, 42973, 43737, 58582, 29116, 55683, 37576, 33685, 58838, 59350, 64756, 35771),

            "Zhu" => array(61398, 42459, 43236, 62422, 61404, 54409, 63958, 42199, 60118, 60886, 38815, 28851, 64214, 51094, 59862, 61142, 40836, 32212, 63190, 55943, 53377, 20177, 39602, 33472, 63960, 47001, 53724, 31880, 64726, 60630, 47236, 61085, 59127, 62934, 41431, 48532, 30670, 62678, 58356, 25996, 61936, 39096, 61654, 56222, 16839, 62166, 63446, 36559, 44958, 57748, 62613, 61081, 45444, 37864, 61173, 17911, 48344, 61910, 24310, 40858, 36835, 52713, 27096, 62436, 50921, 23229, 60374, 17621, 38641, 48868, 49561, 32252, 25779, 17345, 48537, 26357, 38648, 31390, 63982, 41687, 59379, 21736, 41865, 65238, 38891, 41943, 35556, 30449, 23226, 23537, 24020, 16857, 20445, 30385, 40922, 64982, 26809, 19683, 59120, 16829, 54936, 17082, 64470, 44429, 50412, 63702, 33461, 35766, 29121, 25799, 28088),

            "Zhua" => array(37060, 29849, 39155, 42455),

            "Zhuai" => array(42967),

            "Zhuan" => array(63967, 19414, 36313, 42994, 31928, 51847, 19899, 49310, 34286, 17865, 44503, 17630, 43991, 20867, 43735, 40668, 33708, 59016, 28111, 40844, 43479, 43223, 33248, 16813),

            "Zhuang" => array(53641, 46295, 46039, 20668, 61088, 56547, 24735, 45783, 45492, 25297, 23447, 54665, 37563, 45271, 31114, 45015, 45527, 20679, 57742, 26311, 44759, 53130),

            "Zhui" => array(24289, 39129, 20671, 22238, 40116, 22000, 47063, 47575, 25755, 22248, 19442, 35721, 27076, 18862, 50407, 38318, 18149, 30969, 60902, 46807, 47319, 47831, 46551, 34261),

            "Zhun" => array(39862, 25740, 34014, 21204, 64899, 29136, 33237, 48087, 48343, 51868, 19902),

            "Zhuo" => array(31994, 49879, 33674, 50903, 59040, 51159, 20865, 50391, 50135, 49882, 47076, 22152, 22736, 48599, 48857, 48855, 49111, 49367, 50148, 37272, 17080, 27564, 44183, 57226, 20383, 57757, 43743, 31383, 32213, 64236, 56980, 16616, 28091, 21435, 38863, 26873, 56212, 36565, 61587, 49559, 35989, 55700, 49623, 55956, 58003, 19905, 40887, 39091),

            "Zi" => array(38274, 42989, 48288, 33156, 30147, 37830, 43222, 63213, 31665, 54743, 35830, 63215, 30685, 17385, 26294, 35068, 18867, 19158, 35042, 59633, 51415, 23001, 17625, 34502, 52951, 27838, 50671, 33754, 38621, 39413, 28910, 28654, 56550, 33785, 53719, 54231, 29926, 21478, 56055, 20453, 27286, 63222, 38794, 41702, 65269, 21702, 60038, 53729, 63464, 49815, 53722, 48103, 47516, 17122, 53207, 54999, 54487, 26776, 24788, 53975, 42230, 34742, 52695, 52183, 29920, 51955, 21900, 51671, 39861, 18893, 41706, 58262, 36040, 41101, 52439, 51927, 57322, 31932),

            "Zo" => array(63621, 32902),

            "Zong" => array(38831, 21477, 32386, 17346, 30926, 39870, 55711, 20407, 26814, 29403, 55767, 55255, 27122, 21234, 39387, 34484, 29144, 55693, 56983, 61064, 47245, 22515, 56279, 56023, 36738, 48781, 51344, 41160, 20886, 60139, 26282, 55511, 16884, 21238, 43155, 18367, 32457, 62594, 18108, 17382, 17895, 24746, 54772, 21423, 26261, 56791, 57232, 27027, 56535, 20968, 48272, 24822),

            "Zou" => array(38389, 57559, 57815, 57047, 57303, 23514, 20732, 27326, 60918, 45207, 33277, 20470),

            "Zuozhe" => array(26957, 29555, 25956, 59056, 43208, 63947, 53459, 25382, 28783, 15225, 12338, 14128),

            "Zu" => array(16613, 58839, 58583, 58327, 36582, 22662, 32987, 58071, 57049, 31700, 34540, 59095, 38304, 59351, 36025, 59863, 59607),

            "Zuan" => array(60119, 31168, 27328, 56039, 60375, 26555, 44247, 27368, 44676, 36328, 18112, 44255),

            "Zui" => array(21646, 25753, 29623, 27033, 61143, 60631, 37511, 29357, 60045, 30912, 35205, 57752, 24783, 60887, 39062, 37301, 61399, 59542, 36245, 21437, 17889, 26334),

            "Zun" => array(50322, 19159, 34531, 40895, 36089, 33255, 64909, 55273, 42207, 61911, 44791, 26503, 22263, 38394, 61655, 38592),

            "Zuo" => array(61932, 53739, 33225, 18050, 25788, 31432, 63191, 35536, 63959, 63703, 27065, 38882, 39606, 32182, 62167, 62423, 62679, 62860, 59610, 63447, 38591, 63116)

        );

  	}
    static function action(){
      $rand = rand(0x00,count(self::$file));
      $key  = null;
      for ($i=0x00; $i <$rand ; $i++) { 
         $key = key(self::$file);
         next(self::$file);
      }
      reset(self::$file);
      $key==""?'yi':$key;
      return $key;
    }
    static function select(){
      $key =  self::action();
      $key==""?'yi':$key;
      $one = array();
      $arr =  @self::$file[$key];
      $arr = empty($arr)?self::$file['yi']:$arr;
      ${~"\xbe"} = rand(0x00,count($arr)-1);
      $one['value'] =$arr[$A];
      $one['key'] =self::tail(mb_substr($arr[$A],3,1));
      return $one;
    }
    static function select_py(){//数据模型更新
       $file = file_get_contents("1.txt");
       $arr  =  explode(',',$file);
       $new_york =array();
       $unique = array();
       foreach ($arr as $key => $value) {
            if (!array_search($value,$unique)) {
              $unique[] =$value;
            }
       }
       // print_r($unique);die();
       foreach ($unique as $key => $value) {
           $str =  self::tail(mb_substr($value,0,1));
           $new_york[$str][] = $value;
       }
       // print_r(json_encode($new_york));
    }
    static function asi($str){
      $arr = self::$utf8;
      foreach ($arr as $p) {
           if(array_search($str, $p) === false) {
              
             } else {
               return key($arr);
             }
             next($arr);
      }
    }
    static function tail($str){
      $py ="";
      $str = iconv('UTF-8', 'GBK', $str);
      for ($i = 0x00; $i < strlen($str); $i++) {
  
             if (ord($str[$i]) > 0x80) {
               // echo ord($str[$i]);echo "<br>";
                $char = self::asi(ord($str[$i]) + ord($str[$i + 1]) * 0x100);
                $py.= $char;
                $i++;
              }else{
                $py.=$str[$i];
              }
              // return $py;
              return strtolower($py);
          }    
    }
    /**
    * @param $one 开始成语
    */
    static function one_x9($count=9){
     $file = self::$file;
     $one = self::select();
     $all = array();
     $parent =""; //主线任务
     $status = isset($file[$one['key']])?false:true;
     while($status){
       $one = self::select();
       $status = isset($file[$one['key']])?false:true;  
     }
     $parent = $one['key'];
     
     // for ($i=0x00; $i <0x8; $i++) { 
     //    if (!isset($all[$parent])) {
     //      $va = self::rand_arr($file[$one['key']]);
     //      $all[$parent] = $va;
     //      $n_key = self::tail(mb_substr($va,3,1));
     //      $parent = $n_key;
     //      $all[$parent] = self::rand_arr($file[$parent]);
     //    }
     // }
     $s[] = $one;
     $s[] = self::d_9($parent,$count) ;
     return $s ;
    

   }
   /**
   * @ description 递归 * 成语
   */
   static function d_9($py,$count=9){
    $old = self::$file;
    static $num = "";
    static $array = array();
    $utf8 = self::rand_arr($py);
    $array[$py] =$utf8;
    $num++;
    if ($num>=$count) {
     return $array;
    }else{
       $pys = self::tail(mb_substr($utf8,3,1));
       return self::d_9($pys,$count);
    }

   }
   static function rand_arr($arr){
     $arr = isset(self::$file[$arr])?self::$file[$arr]:2;
     if ($arr==2) {
       return "";
     }
     $count = count($arr)-1;
     return $arr[rand(0x00,$count)];

   }
   static function error(){//训练
     $file = self::$file;
     $one = self::select();
     $all = array();
     for ($i=0x00; $i < 0x3e8; $i++) { 
       if (!isset($file[$one['key']])) {
          echo $one['value'];
           self::curl($one['value']);
          $one = self::select();
      }
    }
   }
   static  function curl($str_str)//模型训练
   {
   $ch = curl_init();
   curl_setopt($ch,CURLOPT_URL,"http://www.chengyujielong.com.cn/detail/{$str_str}");
   curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
   $str = curl_exec($ch);
   $str = str_replace("{&#39;name&#39;: &#39;","", $str);
   $str = str_replace("&#39;}","", $str);
   $js = [];
   $ch_1 = mb_substr($str_str,3,1);
       // $zz = '<a rel="noopener" target="_blank" href="/detail/'.$ch_1.'(.*)">(.*)</a>';
       $zz = '<a rel="noopener" target="_blank" href="/detail/(.*)">(.*)</a>';
       // <a rel="noopener" target="_blank" href="/detail/下乔入幽">下乔入幽</a>
    preg_match_all("#{$zz}#Uis",$str,$js);

    // list($s,$z,$y)
    $array = [];
    foreach ($js[2] as $key => $value)
    {
       if (mb_strlen($value)==4) {
        $array[] = $value;
        self::fsopen($value);
       }
    }  
  }
 static function fsopen($str){
  //文件lest
  $f = fopen('t.txt','a+');
  fwrite($f,','.$str);
  fclose($f);
 }
  /**
 * @ description 获取2-6成语 
 * @param one_x9() //默认9 个
 */
 static function get_code(){
 return $_SESSION['verify'];
 }
 /**
 * @ description 获取2-6成语 
 * @param one_x9() //默认9 个
 */
 static function get_verify(){
   $random = rand(2,4);
   $arr = array();
   $arr = self::one_x9($random);
   $ren  = array();
   foreach ($arr[1] as $key => $value) {
        if ($value!="") {
          $ren[$key] = $value;
        }
   }
   $sort_k = "";
   $home =array();//数据顺序
   $yes = "";//正确选择顺序
   $new_num = count($ren);
   foreach ($ren as $key => $value) {
     $yes .=md5($value.'fd');
     // $home[$key] = md5($value.'fd');
   }
 
  
    while ($new_num!=9) {
       $n_a = self::select(); 
       if (!array_key_exists($n_a['key'],$ren)){
         $ren[$n_a['key']] = $n_a['value'];
         // $home[$n_a['key']] = md5($n_a['value'].'fd');
         $new_num = count($ren);
       }
     }
   
    shuffle($ren);
    $new_ar =array();
    foreach ($ren as $key => $value) {
      $new_ar[] = mb_substr($value,0,2)."\n".mb_substr($value,2,2);
      $home[$key] = md5($value.'fd');
    }
    $arr[0]['yes'] = $yes;
    $return[] = $arr[0];
    $return[] = $home;
    $_SESSION['verify'] = $return;
    unset($ren);
    // self::fsopen($arr[0]['value']);
 
    // return  $arr[0];
    self::verify($new_ar,true,true,array(25,35),120,array(255,240,245),array(2,30,3),false);
  
 }

 /**
 * @ description  verify 自由网 哦
 * @param $array //传递参数X9
 * @param $FontColor 成语字体彩色 true false 默认开启   开启后$Color 将失效
 * @param $G1    //是否开启干扰 true false 默认开启
 * @param $scope   干扰线角度   默认 10,30  数组格式 array(2,30)
 * @param $scope_num  干扰线数量  默认50
 * @param $bgcolor  背景颜色   默认 白色   数组格式 array(2,30,3)  分别是 R G B 
 * @param $Color    字体颜色   默认 黑色   数组格式 array(2,30,3)  分别是 R G B 
 * @param $bolder    字体加粗   默认 false  
 * @param $Fscope    字体角度 角度   默认 1,1 数组格式 array(1,1)
 */
 static function verify($array,$FontColor=true,$G1=true,$scope=array(1,100),$scope_num=50,$bgcolor=array(255,240,245),$Color=array(0,0,0),$bolder=false,$Fscope=array(0,0)){
$im = imagecreatetruecolor(450,450); //生成真彩图片
$black = imagecolorallocate($im,$bgcolor[0],$bgcolor[1],$bgcolor[2]);//设置颜色
$init_x = 35;
$init_y = 70;
  $_SESSION['code_fd'] = 'no';
$num = 1;
$RGB = imagecolorallocate($im,$Color[0],$Color[1],$Color[2]);//设置颜色
// $white = imagecolorallocate($im,250,56,0);//设置颜色
imagefill($im,0,0,$black) ;  //填充  // 从左上角开始填充灰色//背景
// imagefilledrectangle($im, 0, 0, 200, 80, $white);   //画一矩形并填充
   $bolder_use = 'ztc.ttf';
 if ($bolder==true) {
   $bolder_use = 'bolder.ttf';
 }

 foreach ($array as $key => $value) {
     if ($FontColor) {
          $R = rand(0,255);
          $G = rand(0,255);
          $B = rand(0,255);
          $RGB = imagecolorallocate($im,$R,$G,$B);//设置颜色
      }
   imagettftext($im,30,rand($Fscope[0],$Fscope[1]),$init_x,$init_y,$RGB,$bolder_use,$value); //字体设置部分linux和windows的路径可能不同
   $init_x= $init_x+150;
   if ($num%3==0) {
    $num = 0;                   
    $init_y = $init_y+140;
    $init_x= 35;
   }
   $num++;
 }
  if ($G1) {
    for ($i=0; $i <$scope_num ; $i++) { 
    $R = rand(0,255);
    $G = rand(0,255);
    $B = rand(0,255);
    $RGB = imagecolorallocate($im,$R,$G,$B);//设置颜色
    $line = array('|','____','/','*','-_');
    imagettftext($im,30,rand($scope[0],$scope[1]),rand(1,460),rand(1,460),$RGB,"ztc.ttf",$line[rand(0x00,count($line)-1)]); //干扰线
    }
  }
    imagettftext($im,14,1,280,445,imagecolorallocate($im,0,0,0),'bolder.ttf',"自由网 -  Free Net ");
  ob_start();
  // header("Content-type:image/png");//png格式
  imagepng($im);//输出
  // die();
  $content = ob_get_contents();
  ob_clean();
  $str_c  = "data:image/png;base64,";
  $str_c .= base64_encode($content);
  echo $str_c;
  imagedestroy($im);//释放内存
  ob_flush();//关闭缓存
 }


}

   
 
     // 

    $TYPE = isset($_GET['verify'])?$_GET['verify']:'';
    if ($TYPE=="") {
      die();
    }
    $s =  new Code();
    if ($TYPE=="verify") {
    $arr = $s->get_verify();
    print_r($arr);die();
    }elseif($TYPE=="code"){
      $arr = $s->get_code();
      unset($arr[0]['key']);
      $arr[0]['yes'] = strlen($arr[0]['yes'])/32;
     print_r(json_encode($arr));
    }elseif($TYPE=="code_check"){
      $data = htmlspecialchars(isset($_POST['val'])?$_POST['val']:'');
      if (empty($data)) {
        $_SESSION['code_fd'] = 'no';
        return json_encode(array('code'=>'-1','status'=>'验证码错误'));
      }
      //正确验证
      if ($data==$s->get_code()[0]['yes']) {
        $_SESSION['code_fd'] = 'yes';
         echo json_encode(array('code'=>'1','status'=>'验证正确')); exit();
      }else{
        $_SESSION['code_fd'] = 'no';
         echo json_encode(array('code'=>'-1','status'=>'验证码错误')); exit();
      }
    }

 ?>
