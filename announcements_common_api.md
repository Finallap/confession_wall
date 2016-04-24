# iService wechat 一般通知 接口文档

## 获取通知列表

获取指定部门的通知列表

### POST

#### URL

http://wechat.aifuwu.org/announcement_api/index.php/Annoucements/get_list

#### Body

```json
{
  "department": "jwc",
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
  "detail": [
    {
      "title": "【学业指导中心】南京邮电大学创新创业讲堂第一次活动通知",
      "id": 16,
      "date": "2016-03-29",
      "view_count": 0
    },
    {
      "title": "【实践科】2016全国大学生英语竞赛考场安排表",
      "id": 19,
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

## 获取通知详情

获取指定部门的具体通知详情

### POST

#### URL

http://wechat.aifuwu.org/announcement_api/index.php/Annoucements/get_article

#### Body

```json
{
  "department": "jwc",
  "id": 24
}
```

### Return

```json
{ "errcode": "0",
  "errmsg": "ok",
  "detail": 
  {
    "id": "2000",
    "title": "【考试中心】关于做好2016年上半年全国大学英语四、六级考试报名通知",
    "date": "2016-03-25",
    "view_count": 2048,
    "url": "http://jwc.njupt.edu.cn/s/24/t/923/67/d2/info92114.htm",
    "content":
    "
      <p>
        为贯彻落实《省教育考试院关于做好2016年上半年大学英语四六级考试报名工作的通知》（苏教考社〔2016〕3号）的文件精神,做好我校2016年上半年全国大学英语四、六级考试报名工作,现将有关事项通知如下：
      </p>
      <p>一、语种级别、考试时间</p>
      <p>
        <img src='http://jwc.njupt.edu.cn/picture/article/24/ab/a5/5a7245df4371a1c61cbcbd7a18fe/e571732c-7aaf-4bd5-8a12-101a655075e5.png'>
      </p>
      <p>...</p>
      <p>
        <img  src='http://jwc.njupt.edu.cn/control/FCKeditor/editor/images/file/doc.gif'>
        <a href='http://jwc.njupt.edu.cn/picture/article/24/ab/a5/5a7245df4371a1c61cbcbd7a18fe/365b172e-6513-48b0-934c-a72cd9a3d1d2.doc'>附件1：CET照片采集标准.doc</a>
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