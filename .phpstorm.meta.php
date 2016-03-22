<?php
	namespace PHPSTORM_META {
	/** @noinspection PhpUnusedLocalVariableInspection */
	/** @noinspection PhpIllegalArrayKeyTypeInspection */
	$STATIC_METHOD_TYPES = [

		\D('') => [
			'News' instanceof Home\Model\NewsModel,
			'Adv' instanceof Think\Model\AdvModel,
			'Mongo' instanceof Think\Model\MongoModel,
			'View' instanceof Think\Model\ViewModel,
			'Cate' instanceof Admin\Model\CateModel,
			'Relation' instanceof Think\Model\RelationModel,
			'Goods' instanceof Admin\Model\GoodsModel,
			'Merge' instanceof Think\Model\MergeModel,
		],
	];
}