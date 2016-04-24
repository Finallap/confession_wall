# iService wechat 宣讲会 接口文档

## 获取宣讲会列表

### POST

#### URL

http://wechat.aifuwu.org/announcement_api/index.php/Annoucements/get_list

#### Body

```json
{
  "department": "teachin",
  "page_size": "10",
  "page": 1
}
```

### Return

返回记录

```json
{
  "errcode": "0",
  "errmsg": "ok",
  "detail": 
  [
    {
      "name": "北京智游联动科技有限公司",
      "id": 16,
      "date": "2016-03-30",
      "view_count": 0
    },
    {
      "name": "苏州青颖飞帆软件科技有限公司",
      "id": 17,
      "date": "2016-03-28",
      "view_count": 0
    },
    {
      "...":"..."
    }
  ],
  "total_pages": 128
}
```

## 获取宣讲会详情

### POST

#### URL

http://wechat.aifuwu.org/announcement_api/index.php/Annoucements/get_article

#### Body

```json
{
  "department": "teachin",
  "id": 17
}
```

### Return

```json
{
  "errcode": "0",
  "errmsg": "ok",
  "detail": 
  {
    "id": "2000",
    "name": "苏州青颖飞帆软件科技有限公司",
    "type": "内资企业--私（民）营企业",
    "industry": "信息传输、软件和信息技术服务业",
    "scale": "50-150人",
    "date": "2016-03-30 14:00-16:00",
    "address": "仙林教3－304（120座）",
    "view_count": 512,
    "url": "http://njupt.91job.gov.cn/teachin/view/id/108998",
    "talk_detail":
    "
      <p>招聘职位：</p>
      <p>1、Java工程师</p>
      <p>2、web工程师</p>
      <p>...</p>
    ",
    "company_description":
    "
      <p>
        从2011年至今，从西雅图到苏州，从离开微软到创立苏州青颖飞帆软件科技有限公司，宋凡和他的联合创始人陈文鑫、李少伟带领团队，始终专注在互联网教育领域，致力于为教育行业内的客户提供基于免费SaaS模式的互联网教育平台和解决方案。公司聚集了来自美国University Of Washington的计算机博士、美国Sam Houston State University的计算机软件专家等高级技术人才，团队拥有优秀的专业技术才能和丰富的研发经验，我们建立了精英化的报酬机制和专家的领导权威，实施不计得失的客户服务，坚持对研发的长期投入，坚守长远的价值、策略、观念和行为同时抓住每一个短期的机会——这些努力让青颖飞帆在激烈的竞争环境中得以披荆斩棘并快速发展。我们是国家高新技术企业，并已成功通过国家千人计划及江苏省双创人才申请，更是软件科技人才提升自我能力的学习基地。我们的产品有青书APP、青书学堂平台。
      </p>
    "
  }
}
```
## Error Return

请求出错时返回错误码

```json
{
  errcode: "40002",
  errmsg: "missing parameter"
}
```

### 错误码说明

```
40001：没找到id对应的文章
40002：所需的请求参数缺少
40003：department参数错误
```