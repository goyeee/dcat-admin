<?php

/**
 * A helper file for Dcat Admin, to provide autocomplete information to your IDE
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author jqh <841324345@qq.com>
 */
namespace Dcat\Admin {
    use Illuminate\Support\Collection;

    /**
     * @property Grid\Column|Collection id
     * @property Grid\Column|Collection username
     * @property Grid\Column|Collection name
     * @property Grid\Column|Collection roles
     * @property Grid\Column|Collection permissions
     * @property Grid\Column|Collection created_at
     * @property Grid\Column|Collection updated_at
     * @property Grid\Column|Collection avatar
     * @property Grid\Column|Collection user
     * @property Grid\Column|Collection method
     * @property Grid\Column|Collection path
     * @property Grid\Column|Collection ip
     * @property Grid\Column|Collection input
     * @property Grid\Column|Collection slug
     * @property Grid\Column|Collection version
     * @property Grid\Column|Collection alias
     * @property Grid\Column|Collection authors
     * @property Grid\Column|Collection enable
     * @property Grid\Column|Collection imported
     * @property Grid\Column|Collection config
     * @property Grid\Column|Collection require
     * @property Grid\Column|Collection require_dev
     * @property Grid\Column|Collection founder_name
     * @property Grid\Column|Collection mobile_number
     * @property Grid\Column|Collection origanization_name
     * @property Grid\Column|Collection number_count
     * @property Grid\Column|Collection create_at
     * @property Grid\Column|Collection first_name
     * @property Grid\Column|Collection last_name
     * @property Grid\Column|Collection birthday
     * @property Grid\Column|Collection nick_name
     * @property Grid\Column|Collection categoryid
     * @property Grid\Column|Collection languageid
     * @property Grid\Column|Collection parentid
     * @property Grid\Column|Collection categoryname
     * @property Grid\Column|Collection indextemlatepath
     * @property Grid\Column|Collection listtemplatepath
     * @property Grid\Column|Collection detailtemplatepath
     * @property Grid\Column|Collection previewurl
     * @property Grid\Column|Collection keywords
     * @property Grid\Column|Collection sortid
     * @property Grid\Column|Collection viewcount
     * @property Grid\Column|Collection addtime
     * @property Grid\Column|Collection systemtime
     * @property Grid\Column|Collection parent_id
     * @property Grid\Column|Collection order
     * @property Grid\Column|Collection icon
     * @property Grid\Column|Collection uri
     * @property Grid\Column|Collection user_id
     * @property Grid\Column|Collection permission_id
     * @property Grid\Column|Collection menu_id
     * @property Grid\Column|Collection http_method
     * @property Grid\Column|Collection http_path
     * @property Grid\Column|Collection role_id
     * @property Grid\Column|Collection password
     * @property Grid\Column|Collection remember_token
     * @property Grid\Column|Collection articleid
     * @property Grid\Column|Collection subtitle
     * @property Grid\Column|Collection comefrom
     * @property Grid\Column|Collection author
     * @property Grid\Column|Collection summary
     * @property Grid\Column|Collection isoriginal
     * @property Grid\Column|Collection isbold
     * @property Grid\Column|Collection linkurl
     * @property Grid\Column|Collection usertypeid
     * @property Grid\Column|Collection thumbimagepath
     * @property Grid\Column|Collection tabletypeid
     * @property Grid\Column|Collection favoritecount
     * @property Grid\Column|Collection likecount
     * @property Grid\Column|Collection articlestatus
     * @property Grid\Column|Collection istask
     * @property Grid\Column|Collection publishtime
     * @property Grid\Column|Collection adminid
     * @property Grid\Column|Collection articlecategoryid
     * @property Grid\Column|Collection ismaster
     * @property Grid\Column|Collection articlecontentid
     * @property Grid\Column|Collection content
     * @property Grid\Column|Collection commentid
     * @property Grid\Column|Collection sourcename
     * @property Grid\Column|Collection sourceid
     * @property Grid\Column|Collection memberid
     * @property Grid\Column|Collection commentcontent
     * @property Grid\Column|Collection replycontent
     * @property Grid\Column|Collection ipaddress
     * @property Grid\Column|Collection isshow
     * @property Grid\Column|Collection commentstatusid
     * @property Grid\Column|Collection verifytime
     * @property Grid\Column|Collection replytime
     * @property Grid\Column|Collection connection
     * @property Grid\Column|Collection queue
     * @property Grid\Column|Collection payload
     * @property Grid\Column|Collection exception
     * @property Grid\Column|Collection failed_at
     * @property Grid\Column|Collection email
     * @property Grid\Column|Collection token
     * @property Grid\Column|Collection email_verified_at
     *
     * @method Grid\Column|Collection id(string $label = null)
     * @method Grid\Column|Collection username(string $label = null)
     * @method Grid\Column|Collection name(string $label = null)
     * @method Grid\Column|Collection roles(string $label = null)
     * @method Grid\Column|Collection permissions(string $label = null)
     * @method Grid\Column|Collection created_at(string $label = null)
     * @method Grid\Column|Collection updated_at(string $label = null)
     * @method Grid\Column|Collection avatar(string $label = null)
     * @method Grid\Column|Collection user(string $label = null)
     * @method Grid\Column|Collection method(string $label = null)
     * @method Grid\Column|Collection path(string $label = null)
     * @method Grid\Column|Collection ip(string $label = null)
     * @method Grid\Column|Collection input(string $label = null)
     * @method Grid\Column|Collection slug(string $label = null)
     * @method Grid\Column|Collection version(string $label = null)
     * @method Grid\Column|Collection alias(string $label = null)
     * @method Grid\Column|Collection authors(string $label = null)
     * @method Grid\Column|Collection enable(string $label = null)
     * @method Grid\Column|Collection imported(string $label = null)
     * @method Grid\Column|Collection config(string $label = null)
     * @method Grid\Column|Collection require(string $label = null)
     * @method Grid\Column|Collection require_dev(string $label = null)
     * @method Grid\Column|Collection founder_name(string $label = null)
     * @method Grid\Column|Collection mobile_number(string $label = null)
     * @method Grid\Column|Collection origanization_name(string $label = null)
     * @method Grid\Column|Collection number_count(string $label = null)
     * @method Grid\Column|Collection create_at(string $label = null)
     * @method Grid\Column|Collection first_name(string $label = null)
     * @method Grid\Column|Collection last_name(string $label = null)
     * @method Grid\Column|Collection birthday(string $label = null)
     * @method Grid\Column|Collection nick_name(string $label = null)
     * @method Grid\Column|Collection categoryid(string $label = null)
     * @method Grid\Column|Collection languageid(string $label = null)
     * @method Grid\Column|Collection parentid(string $label = null)
     * @method Grid\Column|Collection categoryname(string $label = null)
     * @method Grid\Column|Collection indextemlatepath(string $label = null)
     * @method Grid\Column|Collection listtemplatepath(string $label = null)
     * @method Grid\Column|Collection detailtemplatepath(string $label = null)
     * @method Grid\Column|Collection previewurl(string $label = null)
     * @method Grid\Column|Collection keywords(string $label = null)
     * @method Grid\Column|Collection sortid(string $label = null)
     * @method Grid\Column|Collection viewcount(string $label = null)
     * @method Grid\Column|Collection addtime(string $label = null)
     * @method Grid\Column|Collection systemtime(string $label = null)
     * @method Grid\Column|Collection parent_id(string $label = null)
     * @method Grid\Column|Collection order(string $label = null)
     * @method Grid\Column|Collection icon(string $label = null)
     * @method Grid\Column|Collection uri(string $label = null)
     * @method Grid\Column|Collection user_id(string $label = null)
     * @method Grid\Column|Collection permission_id(string $label = null)
     * @method Grid\Column|Collection menu_id(string $label = null)
     * @method Grid\Column|Collection http_method(string $label = null)
     * @method Grid\Column|Collection http_path(string $label = null)
     * @method Grid\Column|Collection role_id(string $label = null)
     * @method Grid\Column|Collection password(string $label = null)
     * @method Grid\Column|Collection remember_token(string $label = null)
     * @method Grid\Column|Collection articleid(string $label = null)
     * @method Grid\Column|Collection subtitle(string $label = null)
     * @method Grid\Column|Collection comefrom(string $label = null)
     * @method Grid\Column|Collection author(string $label = null)
     * @method Grid\Column|Collection summary(string $label = null)
     * @method Grid\Column|Collection isoriginal(string $label = null)
     * @method Grid\Column|Collection isbold(string $label = null)
     * @method Grid\Column|Collection linkurl(string $label = null)
     * @method Grid\Column|Collection usertypeid(string $label = null)
     * @method Grid\Column|Collection thumbimagepath(string $label = null)
     * @method Grid\Column|Collection tabletypeid(string $label = null)
     * @method Grid\Column|Collection favoritecount(string $label = null)
     * @method Grid\Column|Collection likecount(string $label = null)
     * @method Grid\Column|Collection articlestatus(string $label = null)
     * @method Grid\Column|Collection istask(string $label = null)
     * @method Grid\Column|Collection publishtime(string $label = null)
     * @method Grid\Column|Collection adminid(string $label = null)
     * @method Grid\Column|Collection articlecategoryid(string $label = null)
     * @method Grid\Column|Collection ismaster(string $label = null)
     * @method Grid\Column|Collection articlecontentid(string $label = null)
     * @method Grid\Column|Collection content(string $label = null)
     * @method Grid\Column|Collection commentid(string $label = null)
     * @method Grid\Column|Collection sourcename(string $label = null)
     * @method Grid\Column|Collection sourceid(string $label = null)
     * @method Grid\Column|Collection memberid(string $label = null)
     * @method Grid\Column|Collection commentcontent(string $label = null)
     * @method Grid\Column|Collection replycontent(string $label = null)
     * @method Grid\Column|Collection ipaddress(string $label = null)
     * @method Grid\Column|Collection isshow(string $label = null)
     * @method Grid\Column|Collection commentstatusid(string $label = null)
     * @method Grid\Column|Collection verifytime(string $label = null)
     * @method Grid\Column|Collection replytime(string $label = null)
     * @method Grid\Column|Collection connection(string $label = null)
     * @method Grid\Column|Collection queue(string $label = null)
     * @method Grid\Column|Collection payload(string $label = null)
     * @method Grid\Column|Collection exception(string $label = null)
     * @method Grid\Column|Collection failed_at(string $label = null)
     * @method Grid\Column|Collection email(string $label = null)
     * @method Grid\Column|Collection token(string $label = null)
     * @method Grid\Column|Collection email_verified_at(string $label = null)
     */
    class Grid {}

    class MiniGrid extends Grid {}

    /**
     * @property Show\Field|Collection id
     * @property Show\Field|Collection username
     * @property Show\Field|Collection name
     * @property Show\Field|Collection roles
     * @property Show\Field|Collection permissions
     * @property Show\Field|Collection created_at
     * @property Show\Field|Collection updated_at
     * @property Show\Field|Collection avatar
     * @property Show\Field|Collection user
     * @property Show\Field|Collection method
     * @property Show\Field|Collection path
     * @property Show\Field|Collection ip
     * @property Show\Field|Collection input
     * @property Show\Field|Collection slug
     * @property Show\Field|Collection version
     * @property Show\Field|Collection alias
     * @property Show\Field|Collection authors
     * @property Show\Field|Collection enable
     * @property Show\Field|Collection imported
     * @property Show\Field|Collection config
     * @property Show\Field|Collection require
     * @property Show\Field|Collection require_dev
     * @property Show\Field|Collection founder_name
     * @property Show\Field|Collection mobile_number
     * @property Show\Field|Collection origanization_name
     * @property Show\Field|Collection number_count
     * @property Show\Field|Collection create_at
     * @property Show\Field|Collection first_name
     * @property Show\Field|Collection last_name
     * @property Show\Field|Collection birthday
     * @property Show\Field|Collection nick_name
     * @property Show\Field|Collection categoryid
     * @property Show\Field|Collection languageid
     * @property Show\Field|Collection parentid
     * @property Show\Field|Collection categoryname
     * @property Show\Field|Collection indextemlatepath
     * @property Show\Field|Collection listtemplatepath
     * @property Show\Field|Collection detailtemplatepath
     * @property Show\Field|Collection previewurl
     * @property Show\Field|Collection keywords
     * @property Show\Field|Collection sortid
     * @property Show\Field|Collection viewcount
     * @property Show\Field|Collection addtime
     * @property Show\Field|Collection systemtime
     * @property Show\Field|Collection parent_id
     * @property Show\Field|Collection order
     * @property Show\Field|Collection icon
     * @property Show\Field|Collection uri
     * @property Show\Field|Collection user_id
     * @property Show\Field|Collection permission_id
     * @property Show\Field|Collection menu_id
     * @property Show\Field|Collection http_method
     * @property Show\Field|Collection http_path
     * @property Show\Field|Collection role_id
     * @property Show\Field|Collection password
     * @property Show\Field|Collection remember_token
     * @property Show\Field|Collection articleid
     * @property Show\Field|Collection subtitle
     * @property Show\Field|Collection comefrom
     * @property Show\Field|Collection author
     * @property Show\Field|Collection summary
     * @property Show\Field|Collection isoriginal
     * @property Show\Field|Collection isbold
     * @property Show\Field|Collection linkurl
     * @property Show\Field|Collection usertypeid
     * @property Show\Field|Collection thumbimagepath
     * @property Show\Field|Collection tabletypeid
     * @property Show\Field|Collection favoritecount
     * @property Show\Field|Collection likecount
     * @property Show\Field|Collection articlestatus
     * @property Show\Field|Collection istask
     * @property Show\Field|Collection publishtime
     * @property Show\Field|Collection adminid
     * @property Show\Field|Collection articlecategoryid
     * @property Show\Field|Collection ismaster
     * @property Show\Field|Collection articlecontentid
     * @property Show\Field|Collection content
     * @property Show\Field|Collection commentid
     * @property Show\Field|Collection sourcename
     * @property Show\Field|Collection sourceid
     * @property Show\Field|Collection memberid
     * @property Show\Field|Collection commentcontent
     * @property Show\Field|Collection replycontent
     * @property Show\Field|Collection ipaddress
     * @property Show\Field|Collection isshow
     * @property Show\Field|Collection commentstatusid
     * @property Show\Field|Collection verifytime
     * @property Show\Field|Collection replytime
     * @property Show\Field|Collection connection
     * @property Show\Field|Collection queue
     * @property Show\Field|Collection payload
     * @property Show\Field|Collection exception
     * @property Show\Field|Collection failed_at
     * @property Show\Field|Collection email
     * @property Show\Field|Collection token
     * @property Show\Field|Collection email_verified_at
     *
     * @method Show\Field|Collection id(string $label = null)
     * @method Show\Field|Collection username(string $label = null)
     * @method Show\Field|Collection name(string $label = null)
     * @method Show\Field|Collection roles(string $label = null)
     * @method Show\Field|Collection permissions(string $label = null)
     * @method Show\Field|Collection created_at(string $label = null)
     * @method Show\Field|Collection updated_at(string $label = null)
     * @method Show\Field|Collection avatar(string $label = null)
     * @method Show\Field|Collection user(string $label = null)
     * @method Show\Field|Collection method(string $label = null)
     * @method Show\Field|Collection path(string $label = null)
     * @method Show\Field|Collection ip(string $label = null)
     * @method Show\Field|Collection input(string $label = null)
     * @method Show\Field|Collection slug(string $label = null)
     * @method Show\Field|Collection version(string $label = null)
     * @method Show\Field|Collection alias(string $label = null)
     * @method Show\Field|Collection authors(string $label = null)
     * @method Show\Field|Collection enable(string $label = null)
     * @method Show\Field|Collection imported(string $label = null)
     * @method Show\Field|Collection config(string $label = null)
     * @method Show\Field|Collection require(string $label = null)
     * @method Show\Field|Collection require_dev(string $label = null)
     * @method Show\Field|Collection founder_name(string $label = null)
     * @method Show\Field|Collection mobile_number(string $label = null)
     * @method Show\Field|Collection origanization_name(string $label = null)
     * @method Show\Field|Collection number_count(string $label = null)
     * @method Show\Field|Collection create_at(string $label = null)
     * @method Show\Field|Collection first_name(string $label = null)
     * @method Show\Field|Collection last_name(string $label = null)
     * @method Show\Field|Collection birthday(string $label = null)
     * @method Show\Field|Collection nick_name(string $label = null)
     * @method Show\Field|Collection categoryid(string $label = null)
     * @method Show\Field|Collection languageid(string $label = null)
     * @method Show\Field|Collection parentid(string $label = null)
     * @method Show\Field|Collection categoryname(string $label = null)
     * @method Show\Field|Collection indextemlatepath(string $label = null)
     * @method Show\Field|Collection listtemplatepath(string $label = null)
     * @method Show\Field|Collection detailtemplatepath(string $label = null)
     * @method Show\Field|Collection previewurl(string $label = null)
     * @method Show\Field|Collection keywords(string $label = null)
     * @method Show\Field|Collection sortid(string $label = null)
     * @method Show\Field|Collection viewcount(string $label = null)
     * @method Show\Field|Collection addtime(string $label = null)
     * @method Show\Field|Collection systemtime(string $label = null)
     * @method Show\Field|Collection parent_id(string $label = null)
     * @method Show\Field|Collection order(string $label = null)
     * @method Show\Field|Collection icon(string $label = null)
     * @method Show\Field|Collection uri(string $label = null)
     * @method Show\Field|Collection user_id(string $label = null)
     * @method Show\Field|Collection permission_id(string $label = null)
     * @method Show\Field|Collection menu_id(string $label = null)
     * @method Show\Field|Collection http_method(string $label = null)
     * @method Show\Field|Collection http_path(string $label = null)
     * @method Show\Field|Collection role_id(string $label = null)
     * @method Show\Field|Collection password(string $label = null)
     * @method Show\Field|Collection remember_token(string $label = null)
     * @method Show\Field|Collection articleid(string $label = null)
     * @method Show\Field|Collection subtitle(string $label = null)
     * @method Show\Field|Collection comefrom(string $label = null)
     * @method Show\Field|Collection author(string $label = null)
     * @method Show\Field|Collection summary(string $label = null)
     * @method Show\Field|Collection isoriginal(string $label = null)
     * @method Show\Field|Collection isbold(string $label = null)
     * @method Show\Field|Collection linkurl(string $label = null)
     * @method Show\Field|Collection usertypeid(string $label = null)
     * @method Show\Field|Collection thumbimagepath(string $label = null)
     * @method Show\Field|Collection tabletypeid(string $label = null)
     * @method Show\Field|Collection favoritecount(string $label = null)
     * @method Show\Field|Collection likecount(string $label = null)
     * @method Show\Field|Collection articlestatus(string $label = null)
     * @method Show\Field|Collection istask(string $label = null)
     * @method Show\Field|Collection publishtime(string $label = null)
     * @method Show\Field|Collection adminid(string $label = null)
     * @method Show\Field|Collection articlecategoryid(string $label = null)
     * @method Show\Field|Collection ismaster(string $label = null)
     * @method Show\Field|Collection articlecontentid(string $label = null)
     * @method Show\Field|Collection content(string $label = null)
     * @method Show\Field|Collection commentid(string $label = null)
     * @method Show\Field|Collection sourcename(string $label = null)
     * @method Show\Field|Collection sourceid(string $label = null)
     * @method Show\Field|Collection memberid(string $label = null)
     * @method Show\Field|Collection commentcontent(string $label = null)
     * @method Show\Field|Collection replycontent(string $label = null)
     * @method Show\Field|Collection ipaddress(string $label = null)
     * @method Show\Field|Collection isshow(string $label = null)
     * @method Show\Field|Collection commentstatusid(string $label = null)
     * @method Show\Field|Collection verifytime(string $label = null)
     * @method Show\Field|Collection replytime(string $label = null)
     * @method Show\Field|Collection connection(string $label = null)
     * @method Show\Field|Collection queue(string $label = null)
     * @method Show\Field|Collection payload(string $label = null)
     * @method Show\Field|Collection exception(string $label = null)
     * @method Show\Field|Collection failed_at(string $label = null)
     * @method Show\Field|Collection email(string $label = null)
     * @method Show\Field|Collection token(string $label = null)
     * @method Show\Field|Collection email_verified_at(string $label = null)
     */
    class Show {}

    /**
     * @method \Dcat\Admin\Form\Field\Button button(...$params)
     */
    class Form {}

}

namespace Dcat\Admin\Grid {
    /**
     
     */
    class Column {}

    /**
     
     */
    class Filter {}
}

namespace Dcat\Admin\Show {
    /**
     
     */
    class Field {}
}
