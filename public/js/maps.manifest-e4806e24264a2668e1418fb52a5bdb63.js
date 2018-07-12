/**
 * @name MapIconMaker
 * @version 1.1
 * @author Pamela Fox
 * @copyright (c) 2008 Pamela Fox
 * @fileoverview This gives you static functions for creating dynamically
 *   sized and colored marker icons using the Charts API marker output.
 */
function MarkerClusterer (e, t, r) {
	this.extend(MarkerClusterer, google.maps.OverlayView), this.map_ = e, this.markers_ = [], this.clusters_ = [], this.sizes = [53, 56, 66, 78, 90], this.styles_ = [], this.ready_ = !1;
	var o = r || {};
	this.gridSize_ = o.gridSize || 60, this.minClusterSize_ = o.minimumClusterSize || 2, this.maxZoom_ = o.maxZoom || null, this.styles_ = o.styles || [], this.imagePath_ = o.imagePath || this.MARKER_CLUSTER_IMAGE_PATH_, this.imageExtension_ = o.imageExtension || this.MARKER_CLUSTER_IMAGE_EXTENSION_, this.zoomOnClick_ = !0, void 0 != o.zoomOnClick && (this.zoomOnClick_ = o.zoomOnClick), this.averageCenter_ = !1, void 0 != o.averageCenter && (this.averageCenter_ = o.averageCenter), this.setupStyles_(), this.setMap(e), this.prevZoom_ = this.map_.getZoom();
	var s = this;
	google.maps.event.addListener(this.map_, "zoom_changed", function() {
		var e = s.map_.getZoom();
		s.prevZoom_ != e && (s.prevZoom_ = e, s.resetViewport())
	}), google.maps.event.addListener(this.map_, "idle", function() {
		s.redraw()
	}), t && t.length && this.addMarkers(t, !1)
}

function Cluster (e) {
	this.markerClusterer_ = e, this.map_ = e.getMap(), this.gridSize_ = e.getGridSize(), this.minClusterSize_ = e.getMinClusterSize(), this.averageCenter_ = e.isAverageCenter(), this.center_ = null, this.markers_ = [], this.bounds_ = null, this.clusterIcon_ = new ClusterIcon(this, e.getStyles(), e.getGridSize())
}

function ClusterIcon (e, t, r) {
	e.getMarkerClusterer().extend(ClusterIcon, google.maps.OverlayView), this.styles_ = t, this.padding_ = r || 0, this.cluster_ = e, this.center_ = null, this.map_ = e.getMap(), this.div_ = null, this.sums_ = null, this.visible_ = !1, this.setMap(this.map_)
}

var MapIconMaker = {};
MapIconMaker.createMarkerIcon = function(e) {
	var t = e.width || 32, r = e.height || 32, o = e.primaryColor || "#ff0000", s = e.strokeColor || "#000000",
		i = e.cornerColor || "#ffffff", a = "http://chart.apis.google.com/chart?cht=mm",
		n = a + "&chs=" + t + "x" + r + "&chco=" + i.replace("#", "") + "," + o.replace("#", "") + "," + s.replace("#", "") + "&ext=.png",
		p = new GIcon(G_DEFAULT_ICON);
	p.image = n, p.iconSize = new GSize(t, r), p.shadowSize = new GSize(Math.floor(1.6 * t), r), p.iconAnchor = new GPoint(t / 2, r), p.infoWindowAnchor = new GPoint(t / 2, Math.floor(r / 12)), p.printImage = n + "&chof=gif", p.mozPrintImage = n + "&chf=bg,s,ECECD8&chof=gif", n = a + "&chs=" + t + "x" + r + "&chco=" + i.replace("#", "") + "," + o.replace("#", "") + "," + s.replace("#", ""), p.transparent = n + "&chf=a,s,ffffff11&ext=.png", p.imageMap = [t / 2, r, 7 / 16 * t, 5 / 8 * r, 5 / 16 * t, 7 / 16 * r, 7 / 32 * t, 5 / 16 * r, 5 / 16 * t, 1 / 8 * r, .5 * t, 0, .6875 * t, 1 / 8 * r, 25 / 32 * t, 5 / 16 * r, .6875 * t, 7 / 16 * r, 9 / 16 * t, 5 / 8 * r];
	for(var l = 0; l < p.imageMap.length; l++)
	{
		p.imageMap[l] = parseInt(p.imageMap[l]);
	}
	return p
}, MapIconMaker.createFlatIcon = function(e) {
	var t = e.width || 32, r = e.height || 32, o = e.primaryColor || "#ff0000", s = e.shadowColor || "#000000",
		i = MapIconMaker.escapeUserText_(e.label) || "", a = e.labelColor || "#000000", n = e.labelSize || 0,
		p = e.shape || "circle", l = "circle" === p ? "it" : "itr", h = "http://chart.apis.google.com/chart?cht=" + l,
		u = h + "&chs=" + t + "x" + r + "&chco=" + o.replace("#", "") + "," + s.replace("#", "") + "ff,ffffff01&chl=" + i + "&chx=" + a.replace("#", "") + "," + n,
		c = new GIcon(G_DEFAULT_ICON);
	if(c.image = u + "&chf=bg,s,00000000&ext=.png", c.iconSize = new GSize(t, r), c.shadowSize = new GSize(0, 0), c.iconAnchor = new GPoint(t / 2, r / 2), c.infoWindowAnchor = new GPoint(t / 2, r / 2), c.printImage = u + "&chof=gif", c.mozPrintImage = u + "&chf=bg,s,ECECD8&chof=gif", c.transparent = u + "&chf=a,s,ffffff01&ext=.png", c.imageMap = [], "itr" === l) c.imageMap = [0, 0, t, 0, t, r, 0, r];
	else for(var g = 8, d = 360 / g, _ = Math.min(t, r) / 2, m = 0; g + 1 > m; m++)
	{
		var C = d * m * (Math.PI / 180), M = _ + _ * Math.cos(C), f = _ + _ * Math.sin(C);
		c.imageMap.push(parseInt(M), parseInt(f))
	}
	return c
}, MapIconMaker.createLabeledMarkerIcon = function(e) {
	var t = e.primaryColor || "#DA7187", r = e.strokeColor || "#000000", o = e.starPrimaryColor || "#FFFF00",
		s = e.starStrokeColor || "#0000FF", i = MapIconMaker.escapeUserText_(e.label) || "",
		a = e.labelColor || "#000000", n = e.addStar || !1, p = n ? "pin_star" : "pin",
		l = "http://chart.apis.google.com/chart?cht=d&chdp=mapsapi&chl=",
		h = l + p + "'i\\'[" + i + "'-2'f\\hv'a\\]h\\]o\\" + t.replace("#", "") + "'fC\\" + a.replace("#", "") + "'tC\\" + r.replace("#", "") + "'eC\\";
	n && (h += o.replace("#", "") + "'1C\\" + s.replace("#", "") + "'0C\\"), h += "Lauto'f\\";
	var u = new GIcon(G_DEFAULT_ICON);
	return u.image = h + "&ext=.png", u.iconSize = n ? new GSize(23, 39) : new GSize(21, 34), u
}, MapIconMaker.escapeUserText_ = function(e) {
	return void 0 === e ? null : (e = e.replace(/@/, "@@"), e = e.replace(/\\/, "@\\"), e = e.replace(/'/, "@'"), e = e.replace(/\[/, "@["), e = e.replace(/\]/, "@]"), encodeURIComponent(e))
}, MarkerClusterer.prototype.MARKER_CLUSTER_IMAGE_PATH_ = "https://google-maps-utility-library-v3.googlecode.com/svn/trunk/markerclusterer/images/m", MarkerClusterer.prototype.MARKER_CLUSTER_IMAGE_EXTENSION_ = "png", MarkerClusterer.prototype.extend = function(e, t) {
	return function(e) {
		for(var t in e.prototype)
		{
			this.prototype[t] = e.prototype[t];
		}
		return this
	}.apply(e, [t])
}, MarkerClusterer.prototype.onAdd = function() {
	this.setReady_(!0)
}, MarkerClusterer.prototype.draw = function() {
}, MarkerClusterer.prototype.setupStyles_ = function() {
	if(!this.styles_.length) for(var e, t = 0; e = this.sizes[t]; t++)
	{
		this.styles_.push({url: this.imagePath_ + (t + 1) + "." + this.imageExtension_, height: e, width: e})
	}
}, MarkerClusterer.prototype.fitMapToMarkers = function() {
	for(var e, t = this.getMarkers(), r = new google.maps.LatLngBounds, o = 0; e = t[o]; o++)
	{
		r.extend(e.getPosition());
	}
	this.map_.fitBounds(r)
}, MarkerClusterer.prototype.setStyles = function(e) {
	this.styles_ = e
}, MarkerClusterer.prototype.getStyles = function() {
	return this.styles_
}, MarkerClusterer.prototype.isZoomOnClick = function() {
	return this.zoomOnClick_
}, MarkerClusterer.prototype.isAverageCenter = function() {
	return this.averageCenter_
}, MarkerClusterer.prototype.getMarkers = function() {
	return this.markers_
}, MarkerClusterer.prototype.getTotalMarkers = function() {
	return this.markers_.length
}, MarkerClusterer.prototype.setMaxZoom = function(e) {
	this.maxZoom_ = e
}, MarkerClusterer.prototype.getMaxZoom = function() {
	return this.maxZoom_
}, MarkerClusterer.prototype.calculator_ = function(e, t) {
	for(var r = 0, o = e.length, s = o; 0 !== s;)
	{
		s = parseInt(s / 10, 10), r++;
	}
	return r = Math.min(r, t), {text: o, index: r}
}, MarkerClusterer.prototype.setCalculator = function(e) {
	this.calculator_ = e
}, MarkerClusterer.prototype.getCalculator = function() {
	return this.calculator_
}, MarkerClusterer.prototype.addMarkers = function(e, t) {
	for(var r, o = 0; r = e[o]; o++)
	{
		this.pushMarkerTo_(r);
	}
	t || this.redraw()
}, MarkerClusterer.prototype.pushMarkerTo_ = function(e) {
	if(e.isAdded = !1, e.draggable)
	{
		var t = this;
		google.maps.event.addListener(e, "dragend", function() {
			e.isAdded = !1, t.repaint()
		})
	}
	this.markers_.push(e)
}, MarkerClusterer.prototype.addMarker = function(e, t) {
	this.pushMarkerTo_(e), t || this.redraw()
}, MarkerClusterer.prototype.removeMarker_ = function(e) {
	var t = -1;
	if(this.markers_.indexOf) t = this.markers_.indexOf(e);
	else for(var r, o = 0; r = this.markers_[o]; o++)
	{
		if(r == e)
		{
			t = o;
			break
		}
	}
	return -1 == t ? !1 : (e.setMap(null), this.markers_.splice(t, 1), !0)
}, MarkerClusterer.prototype.removeMarker = function(e, t) {
	var r = this.removeMarker_(e);
	return !t && r ? (this.resetViewport(), this.redraw(), !0) : !1
}, MarkerClusterer.prototype.removeMarkers = function(e, t) {
	for(var r, o = !1, s = 0; r = e[s]; s++)
	{
		var i = this.removeMarker_(r);
		o = o || i
	}
	return !t && o ? (this.resetViewport(), this.redraw(), !0) : void 0
}, MarkerClusterer.prototype.setReady_ = function(e) {
	this.ready_ || (this.ready_ = e, this.createClusters_())
}, MarkerClusterer.prototype.getTotalClusters = function() {
	return this.clusters_.length
}, MarkerClusterer.prototype.getMap = function() {
	return this.map_
}, MarkerClusterer.prototype.setMap = function(e) {
	this.map_ = e
}, MarkerClusterer.prototype.getGridSize = function() {
	return this.gridSize_
}, MarkerClusterer.prototype.setGridSize = function(e) {
	this.gridSize_ = e
}, MarkerClusterer.prototype.getMinClusterSize = function() {
	return this.minClusterSize_
}, MarkerClusterer.prototype.setMinClusterSize = function(e) {
	this.minClusterSize_ = e
}, MarkerClusterer.prototype.getExtendedBounds = function(e) {
	var t = this.getProjection(), r = new google.maps.LatLng(e.getNorthEast().lat(), e.getNorthEast().lng()),
		o = new google.maps.LatLng(e.getSouthWest().lat(), e.getSouthWest().lng()), s = t.fromLatLngToDivPixel(r);
	s.x += this.gridSize_, s.y -= this.gridSize_;
	var i = t.fromLatLngToDivPixel(o);
	i.x -= this.gridSize_, i.y += this.gridSize_;
	var a = t.fromDivPixelToLatLng(s), n = t.fromDivPixelToLatLng(i);
	return e.extend(a), e.extend(n), e
}, MarkerClusterer.prototype.isMarkerInBounds_ = function(e, t) {
	return t.contains(e.getPosition())
}, MarkerClusterer.prototype.clearMarkers = function() {
	this.resetViewport(!0), this.markers_ = []
}, MarkerClusterer.prototype.resetViewport = function(e) {
	for(var t, r = 0; t = this.clusters_[r]; r++)
	{
		t.remove();
	}
	for(var o, r = 0; o = this.markers_[r]; r++)
	{
		o.isAdded = !1, e && o.setMap(null);
	}
	this.clusters_ = []
}, MarkerClusterer.prototype.repaint = function() {
	var e = this.clusters_.slice();
	this.clusters_.length = 0, this.resetViewport(), this.redraw(), window.setTimeout(function() {
		for(var t, r = 0; t = e[r]; r++)
		{
			t.remove()
		}
	}, 0)
}, MarkerClusterer.prototype.redraw = function() {
	this.createClusters_()
}, MarkerClusterer.prototype.distanceBetweenPoints_ = function(e, t) {
	if(!e || !t) return 0;
	var r = 6371, o = (t.lat() - e.lat()) * Math.PI / 180, s = (t.lng() - e.lng()) * Math.PI / 180,
		i = Math.sin(o / 2) * Math.sin(o / 2) + Math.cos(e.lat() * Math.PI / 180) * Math.cos(t.lat() * Math.PI / 180) * Math.sin(s / 2) * Math.sin(s / 2),
		a = 2 * Math.atan2(Math.sqrt(i), Math.sqrt(1 - i)), n = r * a;
	return n
}, MarkerClusterer.prototype.addToClosestCluster_ = function(e) {
	for(var t, r = 4e4, o = null, s = (e.getPosition(), 0); t = this.clusters_[s]; s++)
	{
		var i = t.getCenter();
		if(i)
		{
			var a = this.distanceBetweenPoints_(i, e.getPosition());
			r > a && (r = a, o = t)
		}
	}
	if(o && o.isMarkerInClusterBounds(e)) o.addMarker(e);
	else
	{
		var t = new Cluster(this);
		t.addMarker(e), this.clusters_.push(t)
	}
}, MarkerClusterer.prototype.createClusters_ = function() {
	if(this.ready_) for(var e, t = new google.maps.LatLngBounds(this.map_.getBounds().getSouthWest(), this.map_.getBounds().getNorthEast()), r = this.getExtendedBounds(t), o = 0; e = this.markers_[o]; o++)
	{
		!e.isAdded && this.isMarkerInBounds_(e, r) && this.addToClosestCluster_(e)
	}
}, Cluster.prototype.isMarkerAlreadyAdded = function(e) {
	if(this.markers_.indexOf) return -1 != this.markers_.indexOf(e);
	for(var t, r = 0; t = this.markers_[r]; r++)
	{
		if(t == e) return !0;
	}
	return !1
}, Cluster.prototype.addMarker = function(e) {
	if(this.isMarkerAlreadyAdded(e)) return !1;
	if(this.center_)
	{
		if(this.averageCenter_)
		{
			var t = this.markers_.length + 1, r = (this.center_.lat() * (t - 1) + e.getPosition().lat()) / t,
				o = (this.center_.lng() * (t - 1) + e.getPosition().lng()) / t;
			this.center_ = new google.maps.LatLng(r, o), this.calculateBounds_()
		}
	}
	else this.center_ = e.getPosition(), this.calculateBounds_();
	e.isAdded = !0, this.markers_.push(e);
	var s = this.markers_.length;
	if(s < this.minClusterSize_ && e.getMap() != this.map_ && e.setMap(this.map_), s == this.minClusterSize_) for(var i = 0; s > i; i++)
	{
		this.markers_[i].setMap(null);
	}
	return s >= this.minClusterSize_ && e.setMap(null), this.updateIcon(), !0
}, Cluster.prototype.getMarkerClusterer = function() {
	return this.markerClusterer_
}, Cluster.prototype.getBounds = function() {
	for(var e, t = new google.maps.LatLngBounds(this.center_, this.center_), r = this.getMarkers(), o = 0; e = r[o]; o++)
	{
		t.extend(e.getPosition());
	}
	return t
}, Cluster.prototype.remove = function() {
	this.clusterIcon_.remove(), this.markers_.length = 0, delete this.markers_
}, Cluster.prototype.getSize = function() {
	return this.markers_.length
}, Cluster.prototype.getMarkers = function() {
	return this.markers_
}, Cluster.prototype.getCenter = function() {
	return this.center_
}, Cluster.prototype.calculateBounds_ = function() {
	var e = new google.maps.LatLngBounds(this.center_, this.center_);
	this.bounds_ = this.markerClusterer_.getExtendedBounds(e)
}, Cluster.prototype.isMarkerInClusterBounds = function(e) {
	return this.bounds_.contains(e.getPosition())
}, Cluster.prototype.getMap = function() {
	return this.map_
}, Cluster.prototype.updateIcon = function() {
	var e = this.map_.getZoom(), t = this.markerClusterer_.getMaxZoom();
	if(t && e > t) for(var r, o = 0; r = this.markers_[o]; o++)
	{
		r.setMap(this.map_);
	}
	else
	{
		if(this.markers_.length < this.minClusterSize_) return void this.clusterIcon_.hide();
		var s = this.markerClusterer_.getStyles().length, i = this.markerClusterer_.getCalculator()(this.markers_, s);
		this.clusterIcon_.setCenter(this.center_), this.clusterIcon_.setSums(i), this.clusterIcon_.show()
	}
}, ClusterIcon.prototype.triggerClusterClick = function() {
	var e = this.cluster_.getMarkerClusterer();
	google.maps.event.trigger(e, "clusterclick", this.cluster_), e.isZoomOnClick() && this.map_.fitBounds(this.cluster_.getBounds())
}, ClusterIcon.prototype.onAdd = function() {
	if(this.div_ = document.createElement("DIV"), this.visible_)
	{
		var e = this.getPosFromLatLng_(this.center_);
		this.div_.style.cssText = this.createCss(e), this.div_.innerHTML = this.sums_.text
	}
	var t = this.getPanes();
	t.overlayMouseTarget.appendChild(this.div_);
	var r = this;
	google.maps.event.addDomListener(this.div_, "click", function() {
		r.triggerClusterClick()
	})
}, ClusterIcon.prototype.getPosFromLatLng_ = function(e) {
	var t = this.getProjection().fromLatLngToDivPixel(e);
	return t.x -= parseInt(this.width_ / 2, 10), t.y -= parseInt(this.height_ / 2, 10), t
}, ClusterIcon.prototype.draw = function() {
	if(this.visible_)
	{
		var e = this.getPosFromLatLng_(this.center_);
		this.div_.style.top = e.y + "px", this.div_.style.left = e.x + "px"
	}
}, ClusterIcon.prototype.hide = function() {
	this.div_ && (this.div_.style.display = "none"), this.visible_ = !1
}, ClusterIcon.prototype.show = function() {
	if(this.div_)
	{
		var e = this.getPosFromLatLng_(this.center_);
		this.div_.style.cssText = this.createCss(e), this.div_.style.display = ""
	}
	this.visible_ = !0
}, ClusterIcon.prototype.remove = function() {
	this.setMap(null)
}, ClusterIcon.prototype.onRemove = function() {
	this.div_ && this.div_.parentNode && (this.hide(), this.div_.parentNode.removeChild(this.div_), this.div_ = null)
}, ClusterIcon.prototype.setSums = function(e) {
	this.sums_ = e, this.text_ = e.text, this.index_ = e.index, this.div_ && (this.div_.innerHTML = e.text), this.useStyle()
}, ClusterIcon.prototype.useStyle = function() {
	var e = Math.max(0, this.sums_.index - 1);
	e = Math.min(this.styles_.length - 1, e);
	var t = this.styles_[e];
	this.url_ = t.url, this.height_ = t.height, this.width_ = t.width, this.textColor_ = t.textColor, this.anchor_ = t.anchor, this.textSize_ = t.textSize, this.backgroundPosition_ = t.backgroundPosition
}, ClusterIcon.prototype.setCenter = function(e) {
	this.center_ = e
}, ClusterIcon.prototype.createCss = function(e) {
	var t = [];
	t.push("background-image:url(" + this.url_ + ");");
	var r = this.backgroundPosition_ ? this.backgroundPosition_ : "0 0";
	t.push("background-position:" + r + ";"), "object" == typeof this.anchor_ ? (t.push("number" == typeof this.anchor_[0] && this.anchor_[0] > 0 && this.anchor_[0] < this.height_ ? "height:" + (this.height_ - this.anchor_[0]) + "px; padding-top:" + this.anchor_[0] + "px;" : "height:" + this.height_ + "px; line-height:" + this.height_ + "px;"), t.push("number" == typeof this.anchor_[1] && this.anchor_[1] > 0 && this.anchor_[1] < this.width_ ? "width:" + (this.width_ - this.anchor_[1]) + "px; padding-left:" + this.anchor_[1] + "px;" : "width:" + this.width_ + "px; text-align:center;")) : t.push("height:" + this.height_ + "px; line-height:" + this.height_ + "px; width:" + this.width_ + "px; text-align:center;");
	var o = this.textColor_ ? this.textColor_ : "black", s = this.textSize_ ? this.textSize_ : 11;
	return t.push("cursor:pointer; top:" + e.y + "px; left:" + e.x + "px; color:" + o + "; position:absolute; font-size:" + s + "px; font-family:Arial,sans-serif; font-weight:bold"), t.join("")
}, window.MarkerClusterer = MarkerClusterer, MarkerClusterer.prototype.addMarker = MarkerClusterer.prototype.addMarker, MarkerClusterer.prototype.addMarkers = MarkerClusterer.prototype.addMarkers, MarkerClusterer.prototype.clearMarkers = MarkerClusterer.prototype.clearMarkers, MarkerClusterer.prototype.fitMapToMarkers = MarkerClusterer.prototype.fitMapToMarkers, MarkerClusterer.prototype.getCalculator = MarkerClusterer.prototype.getCalculator, MarkerClusterer.prototype.getGridSize = MarkerClusterer.prototype.getGridSize, MarkerClusterer.prototype.getExtendedBounds = MarkerClusterer.prototype.getExtendedBounds, MarkerClusterer.prototype.getMap = MarkerClusterer.prototype.getMap, MarkerClusterer.prototype.getMarkers = MarkerClusterer.prototype.getMarkers, MarkerClusterer.prototype.getMaxZoom = MarkerClusterer.prototype.getMaxZoom, MarkerClusterer.prototype.getStyles = MarkerClusterer.prototype.getStyles, MarkerClusterer.prototype.getTotalClusters = MarkerClusterer.prototype.getTotalClusters, MarkerClusterer.prototype.getTotalMarkers = MarkerClusterer.prototype.getTotalMarkers, MarkerClusterer.prototype.redraw = MarkerClusterer.prototype.redraw, MarkerClusterer.prototype.removeMarker = MarkerClusterer.prototype.removeMarker, MarkerClusterer.prototype.removeMarkers = MarkerClusterer.prototype.removeMarkers, MarkerClusterer.prototype.resetViewport = MarkerClusterer.prototype.resetViewport, MarkerClusterer.prototype.repaint = MarkerClusterer.prototype.repaint, MarkerClusterer.prototype.setCalculator = MarkerClusterer.prototype.setCalculator, MarkerClusterer.prototype.setGridSize = MarkerClusterer.prototype.setGridSize, MarkerClusterer.prototype.setMaxZoom = MarkerClusterer.prototype.setMaxZoom, MarkerClusterer.prototype.onAdd = MarkerClusterer.prototype.onAdd, MarkerClusterer.prototype.draw = MarkerClusterer.prototype.draw, Cluster.prototype.getCenter = Cluster.prototype.getCenter, Cluster.prototype.getSize = Cluster.prototype.getSize, Cluster.prototype.getMarkers = Cluster.prototype.getMarkers, ClusterIcon.prototype.onAdd = ClusterIcon.prototype.onAdd, ClusterIcon.prototype.draw = ClusterIcon.prototype.draw, ClusterIcon.prototype.onRemove = ClusterIcon.prototype.onRemove, ER.require("ER.Maps", function() {


	var o = function() {
	};




}());