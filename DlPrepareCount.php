<?php
/**
 * PrepareCount
 *
 * Prepare snippet count for DocLister.
 *
 * @category    snippet
 * @version     0.3
 * @internal    @properties
 * @internal    @modx_category Content
 * @internal    @installset base
 * @documentation https://github.com/mediakot/DLPrepareCount
 * @author      Created By mkot
 * @lastupdate  04/09/2017
 */
	$docscount = 0;
	$depth = isset($data['depth']) ? intval($data['depth']) : 0;
	$id = isset($data['id']) ? intval($data['id']) : $modx->documentIdentifier;
	if (!empty($data['documents'])) $docscount = count(explode(',',$data['documents']));
	$davailable = $modx->getChildIds($id, $depth);
	$dcount = $modx->getDocuments($davailable, 1, 0, 'id');
	$data['dl.count'] = count($dcount) + $docscount;
return $data;
