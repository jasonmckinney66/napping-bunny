<?php
namespace Aws\AppMesh;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS App Mesh** service.
 * @method \Aws\Result createMesh(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMeshAsync(array $args = [])
 * @method \Aws\Result createRoute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRouteAsync(array $args = [])
 * @method \Aws\Result createVirtualNode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVirtualNodeAsync(array $args = [])
 * @method \Aws\Result createVirtualRouter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVirtualRouterAsync(array $args = [])
 * @method \Aws\Result deleteMesh(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMeshAsync(array $args = [])
 * @method \Aws\Result deleteRoute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRouteAsync(array $args = [])
 * @method \Aws\Result deleteVirtualNode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVirtualNodeAsync(array $args = [])
 * @method \Aws\Result deleteVirtualRouter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVirtualRouterAsync(array $args = [])
 * @method \Aws\Result describeMesh(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMeshAsync(array $args = [])
 * @method \Aws\Result describeRoute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRouteAsync(array $args = [])
 * @method \Aws\Result describeVirtualNode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVirtualNodeAsync(array $args = [])
 * @method \Aws\Result describeVirtualRouter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVirtualRouterAsync(array $args = [])
 * @method \Aws\Result listMeshes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMeshesAsync(array $args = [])
 * @method \Aws\Result listRoutes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRoutesAsync(array $args = [])
 * @method \Aws\Result listVirtualNodes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVirtualNodesAsync(array $args = [])
 * @method \Aws\Result listVirtualRouters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listVirtualRoutersAsync(array $args = [])
 * @method \Aws\Result updateRoute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRouteAsync(array $args = [])
 * @method \Aws\Result updateVirtualNode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateVirtualNodeAsync(array $args = [])
 * @method \Aws\Result updateVirtualRouter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateVirtualRouterAsync(array $args = [])
 * @method \Aws\Result createVirtualService(array $args = []) (supported in versions 2019-01-25)
 * @method \GuzzleHttp\Promise\Promise createVirtualServiceAsync(array $args = []) (supported in versions 2019-01-25)
 * @method \Aws\Result deleteVirtualService(array $args = []) (supported in versions 2019-01-25)
 * @method \GuzzleHttp\Promise\Promise deleteVirtualServiceAsync(array $args = []) (supported in versions 2019-01-25)
 * @method \Aws\Result describeVirtualService(array $args = []) (supported in versions 2019-01-25)
 * @method \GuzzleHttp\Promise\Promise describeVirtualServiceAsync(array $args = []) (supported in versions 2019-01-25)
 * @method \Aws\Result listTagsForResource(array $args = []) (supported in versions 2019-01-25)
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = []) (supported in versions 2019-01-25)
 * @method \Aws\Result listVirtualServices(array $args = []) (supported in versions 2019-01-25)
 * @method \GuzzleHttp\Promise\Promise listVirtualServicesAsync(array $args = []) (supported in versions 2019-01-25)
 * @method \Aws\Result tagResource(array $args = []) (supported in versions 2019-01-25)
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = []) (supported in versions 2019-01-25)
 * @method \Aws\Result untagResource(array $args = []) (supported in versions 2019-01-25)
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = []) (supported in versions 2019-01-25)
 * @method \Aws\Result updateMesh(array $args = []) (supported in versions 2019-01-25)
 * @method \GuzzleHttp\Promise\Promise updateMeshAsync(array $args = []) (supported in versions 2019-01-25)
 * @method \Aws\Result updateVirtualService(array $args = []) (supported in versions 2019-01-25)
 * @method \GuzzleHttp\Promise\Promise updateVirtualServiceAsync(array $args = []) (supported in versions 2019-01-25)
 */
class AppMeshClient extends AwsClient {}
